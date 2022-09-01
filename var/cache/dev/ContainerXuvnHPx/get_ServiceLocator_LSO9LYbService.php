<?php

namespace ContainerXuvnHPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LSO9LYbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LSO9LYb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LSO9LYb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService', true],
            'serializerInterface' => ['privates', 'serializer', 'getSerializerService', true],
        ], [
            'bookRepository' => 'App\\Repository\\BookRepository',
            'serializerInterface' => '?',
        ]);
    }
}
