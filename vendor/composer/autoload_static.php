<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf82213daab4e98c7d86174e00d51f23
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JobsApp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JobsApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf82213daab4e98c7d86174e00d51f23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf82213daab4e98c7d86174e00d51f23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf82213daab4e98c7d86174e00d51f23::$classMap;

        }, null, ClassLoader::class);
    }
}
