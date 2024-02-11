<?php

namespace ContainerIxi6m9j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RblMI1dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RblMI1d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RblMI1d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'classeRepository' => ['privates', 'App\\Repository\\ClasseRepository', 'getClasseRepositoryService', true],
        ], [
            'classeRepository' => 'App\\Repository\\ClasseRepository',
        ]);
    }
}
