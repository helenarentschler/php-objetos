<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit697f20d5b568a122748c806e7c9c83fa
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit697f20d5b568a122748c806e7c9c83fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit697f20d5b568a122748c806e7c9c83fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit697f20d5b568a122748c806e7c9c83fa::$classMap;

        }, null, ClassLoader::class);
    }
}
