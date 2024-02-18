<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit941ad756cbb4dd9acb34d0887c3da2bd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Samie\\PooBlogSami\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Samie\\PooBlogSami\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit941ad756cbb4dd9acb34d0887c3da2bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit941ad756cbb4dd9acb34d0887c3da2bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit941ad756cbb4dd9acb34d0887c3da2bd::$classMap;

        }, null, ClassLoader::class);
    }
}
