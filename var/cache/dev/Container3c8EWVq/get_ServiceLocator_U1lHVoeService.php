<?php

namespace Container3c8EWVq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U1lHVoeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u1lHVoe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u1lHVoe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'burger' => ['privates', '.errored..service_locator.u1lHVoe.App\\Entity\\Burgers', NULL, 'Cannot autowire service ".service_locator.u1lHVoe": it needs an instance of "App\\Entity\\Burgers" but this type has been excluded in "config/services.yaml".'],
        ], [
            'burger' => 'App\\Entity\\Burgers',
        ]);
    }
}
