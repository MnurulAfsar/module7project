<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit38429b6df2ef0c2e54718a439bc83a85
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

        spl_autoload_register(array('ComposerAutoloaderInit38429b6df2ef0c2e54718a439bc83a85', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit38429b6df2ef0c2e54718a439bc83a85', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit38429b6df2ef0c2e54718a439bc83a85::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
