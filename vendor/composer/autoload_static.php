<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit683a72808ac50564ec559996c69ef768
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit683a72808ac50564ec559996c69ef768::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit683a72808ac50564ec559996c69ef768::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit683a72808ac50564ec559996c69ef768::$classMap;

        }, null, ClassLoader::class);
    }
}
