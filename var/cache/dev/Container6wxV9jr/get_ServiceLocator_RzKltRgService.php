<?php

namespace Container6wxV9jr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RzKltRgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RzKltRg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RzKltRg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'burgers' => ['privates', '.errored..service_locator.RzKltRg.App\\Entity\\Burgers', NULL, 'Cannot autowire service ".service_locator.RzKltRg": it needs an instance of "App\\Entity\\Burgers" but this type has been excluded in "config/services.yaml".'],
        ], [
            'burgers' => 'App\\Entity\\Burgers',
        ]);
    }
}
