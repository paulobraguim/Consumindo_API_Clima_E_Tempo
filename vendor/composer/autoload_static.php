<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11220f19b3e41df7babdd7893bc41549
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11220f19b3e41df7babdd7893bc41549::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11220f19b3e41df7babdd7893bc41549::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11220f19b3e41df7babdd7893bc41549::$classMap;

        }, null, ClassLoader::class);
    }
}
