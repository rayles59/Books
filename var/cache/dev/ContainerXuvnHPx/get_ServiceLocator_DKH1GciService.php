<?php

namespace ContainerXuvnHPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKH1GciService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKH1Gci' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKH1Gci'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authorRepository' => ['privates', 'App\\Repository\\AuthorRepository', 'getAuthorRepositoryService', true],
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'serializerInterface' => ['privates', 'serializer', 'getSerializerService', true],
            'validator' => ['privates', 'validator', 'getValidatorService', true],
        ], [
            'authorRepository' => 'App\\Repository\\AuthorRepository',
            'entityManagerInterface' => '?',
            'serializerInterface' => '?',
            'validator' => '?',
        ]);
    }
}
