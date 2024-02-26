<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d3e6ba6d0806965a5f3ac45bbcf492f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Lib\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Lib\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d3e6ba6d0806965a5f3ac45bbcf492f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d3e6ba6d0806965a5f3ac45bbcf492f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d3e6ba6d0806965a5f3ac45bbcf492f::$classMap;

        }, null, ClassLoader::class);
    }
}
