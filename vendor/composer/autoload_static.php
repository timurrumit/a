<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e1d57f8157066bd43454be0112e2544
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\HttpFoundation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-foundation',
            ),
        ),
    );

    public static $classMap = array (
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6e1d57f8157066bd43454be0112e2544::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6e1d57f8157066bd43454be0112e2544::$classMap;

        }, null, ClassLoader::class);
    }
}
