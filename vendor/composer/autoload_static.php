<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd21fb154f54a39050c813597ee94956
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd21fb154f54a39050c813597ee94956::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd21fb154f54a39050c813597ee94956::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdd21fb154f54a39050c813597ee94956::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdd21fb154f54a39050c813597ee94956::$classMap;

        }, null, ClassLoader::class);
    }
}
