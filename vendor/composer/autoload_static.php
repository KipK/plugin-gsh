<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit623cd7a15fcd0d56c8b5c3afa8fd8825
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit623cd7a15fcd0d56c8b5c3afa8fd8825::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit623cd7a15fcd0d56c8b5c3afa8fd8825::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
