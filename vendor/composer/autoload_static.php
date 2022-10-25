<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac7b1972c1e45b345f66ce093478a01b
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaber\\CustomAuth\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaber\\CustomAuth\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac7b1972c1e45b345f66ce093478a01b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac7b1972c1e45b345f66ce093478a01b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac7b1972c1e45b345f66ce093478a01b::$classMap;

        }, null, ClassLoader::class);
    }
}
