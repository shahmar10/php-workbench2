<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4581d38b1b55f2a81b7b1dc8c95dc92b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4581d38b1b55f2a81b7b1dc8c95dc92b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4581d38b1b55f2a81b7b1dc8c95dc92b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
