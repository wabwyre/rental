<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd2eca48f7d3c3e04d7e837568461ee3
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Translation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/translation',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitfd2eca48f7d3c3e04d7e837568461ee3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}