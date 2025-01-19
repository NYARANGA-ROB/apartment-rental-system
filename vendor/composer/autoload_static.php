<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit845c986111fa21e52240f5e1d3203d13
{
    public static $files = array (
        'a13625b0b50fbf6c65490231df38b04b' => __DIR__ . '/../..' . '/lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit845c986111fa21e52240f5e1d3203d13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit845c986111fa21e52240f5e1d3203d13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit845c986111fa21e52240f5e1d3203d13::$classMap;

        }, null, ClassLoader::class);
    }
}
