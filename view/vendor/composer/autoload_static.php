<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c292e45533026351a19b379e061436d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dixit\\View\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dixit\\View\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c292e45533026351a19b379e061436d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c292e45533026351a19b379e061436d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c292e45533026351a19b379e061436d::$classMap;

        }, null, ClassLoader::class);
    }
}
