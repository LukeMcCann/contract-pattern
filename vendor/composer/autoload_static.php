<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee7fe1b2e7a58fc557879829a841aaac
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wikimedia\\Composer\\Merge\\V2\\' => 28,
        ),
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'S' => 
        array (
            'SiglaMeo\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wikimedia\\Composer\\Merge\\V2\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src',
        ),
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'SiglaMeo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework/src/SiglaMeo',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'SiglaMeo\\Contracts\\Container\\Container' => __DIR__ . '/../..' . '/framework/src/SiglaMeo/Contracts/Container/Container.php',
        'SiglaMeo\\Foundation\\Application' => __DIR__ . '/../..' . '/framework/src/SiglaMeo/Foundation/Application.php',
        'SigleMeo\\Container\\Container' => __DIR__ . '/../..' . '/framework/src/SiglaMeo/Container/Container.php',
        'Wikimedia\\Composer\\Merge\\V2\\ExtraPackage' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/ExtraPackage.php',
        'Wikimedia\\Composer\\Merge\\V2\\Logger' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Logger.php',
        'Wikimedia\\Composer\\Merge\\V2\\MergePlugin' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/MergePlugin.php',
        'Wikimedia\\Composer\\Merge\\V2\\MissingFileException' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/MissingFileException.php',
        'Wikimedia\\Composer\\Merge\\V2\\MultiConstraint' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/MultiConstraint.php',
        'Wikimedia\\Composer\\Merge\\V2\\NestedArray' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/NestedArray.php',
        'Wikimedia\\Composer\\Merge\\V2\\PluginState' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/PluginState.php',
        'Wikimedia\\Composer\\Merge\\V2\\StabilityFlags' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/StabilityFlags.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee7fe1b2e7a58fc557879829a841aaac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee7fe1b2e7a58fc557879829a841aaac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee7fe1b2e7a58fc557879829a841aaac::$classMap;

        }, null, ClassLoader::class);
    }
}
