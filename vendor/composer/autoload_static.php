<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5bfc7b1ab665b386e31a01cb3f2a820
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5bfc7b1ab665b386e31a01cb3f2a820::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5bfc7b1ab665b386e31a01cb3f2a820::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5bfc7b1ab665b386e31a01cb3f2a820::$classMap;

        }, null, ClassLoader::class);
    }
}
