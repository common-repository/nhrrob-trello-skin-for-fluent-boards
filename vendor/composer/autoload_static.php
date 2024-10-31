<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e9c6df104153fee4688738a7d3f982f
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nhrtsf\\TrelloSkin\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nhrtsf\\TrelloSkin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e9c6df104153fee4688738a7d3f982f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e9c6df104153fee4688738a7d3f982f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e9c6df104153fee4688738a7d3f982f::$classMap;

        }, null, ClassLoader::class);
    }
}
