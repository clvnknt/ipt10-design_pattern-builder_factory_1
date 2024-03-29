<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4911eb4fea90e7578c4aad92f905938a
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4911eb4fea90e7578c4aad92f905938a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4911eb4fea90e7578c4aad92f905938a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4911eb4fea90e7578c4aad92f905938a::$classMap;

        }, null, ClassLoader::class);
    }
}
