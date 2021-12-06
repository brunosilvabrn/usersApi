<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita56ff82773bd8edb33f00eedb97d2128
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita56ff82773bd8edb33f00eedb97d2128::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita56ff82773bd8edb33f00eedb97d2128::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita56ff82773bd8edb33f00eedb97d2128::$classMap;

        }, null, ClassLoader::class);
    }
}