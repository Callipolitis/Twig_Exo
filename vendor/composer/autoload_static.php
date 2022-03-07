<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdddf0d4ff20d66465e6c06abf2e82e7a
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdddf0d4ff20d66465e6c06abf2e82e7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdddf0d4ff20d66465e6c06abf2e82e7a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdddf0d4ff20d66465e6c06abf2e82e7a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdddf0d4ff20d66465e6c06abf2e82e7a::$classMap;

        }, null, ClassLoader::class);
    }
}
