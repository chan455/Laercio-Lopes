<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c8c34cfdb1c5d81f0f2898003303ca9
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c8c34cfdb1c5d81f0f2898003303ca9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c8c34cfdb1c5d81f0f2898003303ca9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
