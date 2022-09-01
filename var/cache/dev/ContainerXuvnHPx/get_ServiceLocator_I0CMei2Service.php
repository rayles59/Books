<?php

namespace ContainerXuvnHPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I0CMei2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I0CMei2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I0CMei2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthorController::RemoveAuthor' => ['privates', '.service_locator.YM96oCL', 'get_ServiceLocator_YM96oCLService', true],
            'App\\Controller\\AuthorController::createAuthor' => ['privates', '.service_locator.jaLcF7S', 'get_ServiceLocator_JaLcF7SService', true],
            'App\\Controller\\AuthorController::getAllAuthors' => ['privates', '.service_locator.30Gku0K', 'get_ServiceLocator_30Gku0KService', true],
            'App\\Controller\\AuthorController::getAuthor' => ['privates', '.service_locator.mM9QlU2', 'get_ServiceLocator_MM9QlU2Service', true],
            'App\\Controller\\BookController::AddBook' => ['privates', '.service_locator.dKH1Gci', 'get_ServiceLocator_DKH1GciService', true],
            'App\\Controller\\BookController::RemoveBook' => ['privates', '.service_locator.3.XP5W1', 'get_ServiceLocator_3_XP5W1Service', true],
            'App\\Controller\\BookController::UpdateBook' => ['privates', '.service_locator.mxSmC0U', 'get_ServiceLocator_MxSmC0UService', true],
            'App\\Controller\\BookController::getAllBooks' => ['privates', '.service_locator.LSO9LYb', 'get_ServiceLocator_LSO9LYbService', true],
            'App\\Controller\\BookController::getOneBook' => ['privates', '.service_locator.2cXF24x', 'get_ServiceLocator_2cXF24xService', true],
            'App\\Controller\\BookController::montest' => ['privates', '.service_locator.hssBkdp', 'get_ServiceLocator_HssBkdpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AuthorController:RemoveAuthor' => ['privates', '.service_locator.YM96oCL', 'get_ServiceLocator_YM96oCLService', true],
            'App\\Controller\\AuthorController:createAuthor' => ['privates', '.service_locator.jaLcF7S', 'get_ServiceLocator_JaLcF7SService', true],
            'App\\Controller\\AuthorController:getAllAuthors' => ['privates', '.service_locator.30Gku0K', 'get_ServiceLocator_30Gku0KService', true],
            'App\\Controller\\AuthorController:getAuthor' => ['privates', '.service_locator.mM9QlU2', 'get_ServiceLocator_MM9QlU2Service', true],
            'App\\Controller\\BookController:AddBook' => ['privates', '.service_locator.dKH1Gci', 'get_ServiceLocator_DKH1GciService', true],
            'App\\Controller\\BookController:RemoveBook' => ['privates', '.service_locator.3.XP5W1', 'get_ServiceLocator_3_XP5W1Service', true],
            'App\\Controller\\BookController:UpdateBook' => ['privates', '.service_locator.mxSmC0U', 'get_ServiceLocator_MxSmC0UService', true],
            'App\\Controller\\BookController:getAllBooks' => ['privates', '.service_locator.LSO9LYb', 'get_ServiceLocator_LSO9LYbService', true],
            'App\\Controller\\BookController:getOneBook' => ['privates', '.service_locator.2cXF24x', 'get_ServiceLocator_2cXF24xService', true],
            'App\\Controller\\BookController:montest' => ['privates', '.service_locator.hssBkdp', 'get_ServiceLocator_HssBkdpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AuthorController::RemoveAuthor' => '?',
            'App\\Controller\\AuthorController::createAuthor' => '?',
            'App\\Controller\\AuthorController::getAllAuthors' => '?',
            'App\\Controller\\AuthorController::getAuthor' => '?',
            'App\\Controller\\BookController::AddBook' => '?',
            'App\\Controller\\BookController::RemoveBook' => '?',
            'App\\Controller\\BookController::UpdateBook' => '?',
            'App\\Controller\\BookController::getAllBooks' => '?',
            'App\\Controller\\BookController::getOneBook' => '?',
            'App\\Controller\\BookController::montest' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthorController:RemoveAuthor' => '?',
            'App\\Controller\\AuthorController:createAuthor' => '?',
            'App\\Controller\\AuthorController:getAllAuthors' => '?',
            'App\\Controller\\AuthorController:getAuthor' => '?',
            'App\\Controller\\BookController:AddBook' => '?',
            'App\\Controller\\BookController:RemoveBook' => '?',
            'App\\Controller\\BookController:UpdateBook' => '?',
            'App\\Controller\\BookController:getAllBooks' => '?',
            'App\\Controller\\BookController:getOneBook' => '?',
            'App\\Controller\\BookController:montest' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
