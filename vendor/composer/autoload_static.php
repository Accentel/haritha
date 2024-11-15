<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c91daf414e98f7af7c294e0856c4687
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c91daf414e98f7af7c294e0856c4687::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c91daf414e98f7af7c294e0856c4687::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c91daf414e98f7af7c294e0856c4687::$classMap;

        }, null, ClassLoader::class);
    }
}
