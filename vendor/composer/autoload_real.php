<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitebc6b43f918320e8a290803ae65cdb4b
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

        spl_autoload_register(array('ComposerAutoloaderInitebc6b43f918320e8a290803ae65cdb4b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitebc6b43f918320e8a290803ae65cdb4b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitebc6b43f918320e8a290803ae65cdb4b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}