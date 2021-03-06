<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3e5f5534339e05d8f9c595b771e4c92
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
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'App\\PHPCrypto\\PHPCrypto' => __DIR__ . '/../..' . '/classes/PHPCrypto/PHPCrypto.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3e5f5534339e05d8f9c595b771e4c92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3e5f5534339e05d8f9c595b771e4c92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3e5f5534339e05d8f9c595b771e4c92::$classMap;

        }, null, ClassLoader::class);
    }
}
