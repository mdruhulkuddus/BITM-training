<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa8d5f36a3ffb5f1be4aa5840acbf68d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa8d5f36a3ffb5f1be4aa5840acbf68d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa8d5f36a3ffb5f1be4aa5840acbf68d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa8d5f36a3ffb5f1be4aa5840acbf68d::$classMap;

        }, null, ClassLoader::class);
    }
}
