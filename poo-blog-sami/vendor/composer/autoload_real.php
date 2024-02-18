<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit941ad756cbb4dd9acb34d0887c3da2bd
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

        spl_autoload_register(array('ComposerAutoloaderInit941ad756cbb4dd9acb34d0887c3da2bd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit941ad756cbb4dd9acb34d0887c3da2bd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit941ad756cbb4dd9acb34d0887c3da2bd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
