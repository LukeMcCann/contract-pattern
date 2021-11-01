<?php declare(strict_types = 1);

namespace SiglaMeo\Container;

use SiglaMeo\Contracts\Container\Container as ContainerContract;

class Container implements ContainerContract
{
    protected static $instance;

    protected $bindings = [];

    /**
     * Set the shared instance of the container.
     *
     * @param SiglaMeo\Contracts\Container\Container|null $container
     * @return SiglaMeo\Contracts\Container\Container|static
     */
    public static function setInstance(ContainerContract $container = null)
    {
        return static::$instance = $container; 
    }

    /**
     * Get the globally available instance of the Container.
     *
     * @return static
     */
    public static function getInstance() 
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    /**
     * Register a binding with the container. 
     *
     * @param string $abstract
     * @param Callable|string|null  $concrete
     * @return void
     * 
     */
    public function bind(string $abstract, callable $concrete = null) 
    {
        $this->bindings[$abstract] = $concrete;
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @return mixed
     */
    public function make(string $abstract)
    {
        if (isset($this->bindings[$abstract])) {
            $this->bindings[$abstract]();
        }
    }
}