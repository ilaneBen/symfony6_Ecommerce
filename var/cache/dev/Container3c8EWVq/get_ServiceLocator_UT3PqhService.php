<?php

namespace Container3c8EWVq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UT3PqhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uT3_pqh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uT3_pqh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sandwich' => ['privates', '.errored..service_locator.uT3_pqh.App\\Entity\\Sandwichs', NULL, 'Cannot autowire service ".service_locator.uT3_pqh": it needs an instance of "App\\Entity\\Sandwichs" but this type has been excluded in "config/services.yaml".'],
            'sandwichsRepository' => ['privates', 'App\\Repository\\SandwichsRepository', 'getSandwichsRepositoryService', true],
        ], [
            'sandwich' => 'App\\Entity\\Sandwichs',
            'sandwichsRepository' => 'App\\Repository\\SandwichsRepository',
        ]);
    }
}
