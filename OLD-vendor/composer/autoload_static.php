<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a92bbeb58c411af2654ba8ae0d8c9bd
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
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'P' => 
        array (
            'Pico\\Composer\\' => 14,
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
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Pico\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/picocms/composer-installer/src',
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
        'P' => 
        array (
            'PicoPluginInterface' => 
            array (
                0 => __DIR__ . '/..' . '/picocms/pico/lib',
            ),
            'Pico' => 
            array (
                0 => __DIR__ . '/..' . '/picocms/pico/lib',
            ),
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'A' => 
        array (
            'AbstractPicoPlugin' => 
            array (
                0 => __DIR__ . '/..' . '/picocms/pico/lib',
            ),
        ),
    );

    public static $classMap = array (
        'PicoDeprecated' => __DIR__ . '/../..' . '/plugins/PicoDeprecated/PicoDeprecated.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a92bbeb58c411af2654ba8ae0d8c9bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a92bbeb58c411af2654ba8ae0d8c9bd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1a92bbeb58c411af2654ba8ae0d8c9bd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1a92bbeb58c411af2654ba8ae0d8c9bd::$classMap;

        }, null, ClassLoader::class);
    }
}
