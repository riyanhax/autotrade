<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bdb0aad4123418b78d00ff2e17216ae
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BossBaby\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BossBaby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'BossBaby\\Config' => __DIR__ . '/../..' . '/src/Config.php',
        'BossBaby\\Shell' => __DIR__ . '/../..' . '/src/Shell.php',
        'BossBaby\\Utility' => __DIR__ . '/../..' . '/src/Utility.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bdb0aad4123418b78d00ff2e17216ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bdb0aad4123418b78d00ff2e17216ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5bdb0aad4123418b78d00ff2e17216ae::$classMap;

        }, null, ClassLoader::class);
    }
}