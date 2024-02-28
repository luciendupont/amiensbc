<?php

namespace ContainerBzCjyxs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAeroboxeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AeroboxeController' shared autowired service.
     *
     * @return \App\Controller\AeroboxeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AeroboxeController.php';

        $container->services['App\\Controller\\AeroboxeController'] = $instance = new \App\Controller\AeroboxeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AeroboxeController', $container));

        return $instance;
    }
}
