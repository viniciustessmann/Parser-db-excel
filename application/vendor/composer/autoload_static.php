<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1d9fb4b02f35e5556cdb7e8534fb571
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xls\\' => 4,
        ),
        'T' => 
        array (
            'Test\\' => 5,
        ),
        'P' => 
        array (
            'Possible\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xls\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxakawizard/xls-writer/src',
        ),
        'Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxakawizard/xls-writer/tests',
        ),
        'Possible\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1d9fb4b02f35e5556cdb7e8534fb571::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1d9fb4b02f35e5556cdb7e8534fb571::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}