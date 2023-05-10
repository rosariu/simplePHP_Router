<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2e506e5dd8f8f331d235209bb46e50de
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

        spl_autoload_register(array('ComposerAutoloaderInit2e506e5dd8f8f331d235209bb46e50de', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2e506e5dd8f8f331d235209bb46e50de', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2e506e5dd8f8f331d235209bb46e50de::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
