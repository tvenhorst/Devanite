<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbe4328d548a0a8e91034bc0db5247df
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbe4328d548a0a8e91034bc0db5247df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbe4328d548a0a8e91034bc0db5247df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbe4328d548a0a8e91034bc0db5247df::$classMap;

        }, null, ClassLoader::class);
    }
}
