<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6826cda805c505bc194a7e78631b3f19
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'ksfraser\\origin\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ksfraser\\origin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6826cda805c505bc194a7e78631b3f19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6826cda805c505bc194a7e78631b3f19::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}