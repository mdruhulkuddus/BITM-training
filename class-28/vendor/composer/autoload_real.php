<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4e9efc7d4652758e0bbf827c00d72434
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit4e9efc7d4652758e0bbf827c00d72434', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4e9efc7d4652758e0bbf827c00d72434', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4e9efc7d4652758e0bbf827c00d72434::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}