<?php declare(strict_types = 1);

namespace SiglaMeo\Contracts\Container; 

interface Container 
{
    /**
     * Set the shared instance of the container.
     *
     * @param SiglaMeo\Contracts\Container\Container|null $container
     * @return SiglaMeo\Contracts\Container\Container|static
     */
    public static function setInstance();

    /**
     * Get the globally available instance of the Container.
     *
     * @return static
     */
    public static function getInstance();

    /**
     * Register a binding with the container. 
     *
     * @param string $abstract
     * @param Callable|string|null  $concrete
     * @return void
     * 
     */
    public function bind(string $abstract, callable $concrete);
    
    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @return mixed
     */
    public function make(string $abstract);
}