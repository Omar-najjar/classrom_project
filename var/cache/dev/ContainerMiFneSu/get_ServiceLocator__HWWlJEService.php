<?php

namespace ContainerMiFneSu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__HWWlJEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..HWWlJE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..HWWlJE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'classe' => ['privates', '.errored..service_locator..HWWlJE.App\\Entity\\Classe', NULL, 'Cannot autowire service ".service_locator..HWWlJE": it needs an instance of "App\\Entity\\Classe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'classe' => 'App\\Entity\\Classe',
        ]);
    }
}
