<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9d85001a94bb4c9866863913c69d60c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9d85001a94bb4c9866863913c69d60c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9d85001a94bb4c9866863913c69d60c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9d85001a94bb4c9866863913c69d60c::$classMap;

        }, null, ClassLoader::class);
    }
}
