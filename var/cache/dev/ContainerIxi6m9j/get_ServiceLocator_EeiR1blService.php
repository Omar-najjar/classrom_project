<?php

namespace ContainerIxi6m9j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EeiR1blService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eeiR1bl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eeiR1bl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cour' => ['privates', '.errored..service_locator.eeiR1bl.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.eeiR1bl": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
        ], [
            'cour' => 'App\\Entity\\Cours',
        ]);
    }
}