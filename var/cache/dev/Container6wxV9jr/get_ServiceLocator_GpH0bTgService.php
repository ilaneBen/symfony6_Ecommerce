<?php

namespace Container6wxV9jr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GpH0bTgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GpH0bTg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GpH0bTg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sandwichs' => ['privates', '.errored..service_locator.GpH0bTg.App\\Entity\\Sandwichs', NULL, 'Cannot autowire service ".service_locator.GpH0bTg": it needs an instance of "App\\Entity\\Sandwichs" but this type has been excluded in "config/services.yaml".'],
        ], [
            'sandwichs' => 'App\\Entity\\Sandwichs',
        ]);
    }
}
