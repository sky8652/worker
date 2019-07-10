<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ab837ee574f2ebc17b2e2bf56bdf668
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ab837ee574f2ebc17b2e2bf56bdf668::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ab837ee574f2ebc17b2e2bf56bdf668::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}