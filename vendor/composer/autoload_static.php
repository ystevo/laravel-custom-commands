<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc024f9c33ef1aaa52048afddf69297c0
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Ystevo\\LaravelCustomCommands\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ystevo\\LaravelCustomCommands\\' => 
        array (
            0 => __DIR__ . '/..' . '/ystevo/laravel-custom-commands/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc024f9c33ef1aaa52048afddf69297c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc024f9c33ef1aaa52048afddf69297c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc024f9c33ef1aaa52048afddf69297c0::$classMap;

        }, null, ClassLoader::class);
    }
}
