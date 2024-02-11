<?php

namespace ContainerIxi6m9j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BHmLGFqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BHmLGFq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BHmLGFq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cour' => ['privates', '.errored..service_locator.BHmLGFq.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.BHmLGFq": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cour' => 'App\\Entity\\Cours',
            'entityManager' => '?',
        ]);
    }
}
