<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ab7dae5232f88349982943b113f1a12
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'df802b894e682cf0eff9955cc6d0079a' => __DIR__ . '/../..' . '/src/Controller.php',
        '0e1ee3afbc6a5bbe5ab85f3d50e45756' => __DIR__ . '/../..' . '/src/View.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yukio\\GuessNumber\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yukio\\GuessNumber\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ab7dae5232f88349982943b113f1a12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ab7dae5232f88349982943b113f1a12::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3ab7dae5232f88349982943b113f1a12::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3ab7dae5232f88349982943b113f1a12::$classMap;

        }, null, ClassLoader::class);
    }
}