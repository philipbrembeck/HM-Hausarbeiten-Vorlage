<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited3be09bd3487f126f15923cfe1a71db
{
    public static $files = array (
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
        '1e324484438cc32b4bd213e3a86f9851' => __DIR__ . '/..' . '/philipp15b/php-i18n/i18n.class.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInited3be09bd3487f126f15923cfe1a71db::$classMap;

        }, null, ClassLoader::class);
    }
}
