<?php

namespace ContainerQkL1FAh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q60ydOj.App\Controller\UserController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.q60ydOj'] ?? $container->load('get_ServiceLocator_Q60ydOjService'));

        if (isset($container->privates['.service_locator.q60ydOj.App\\Controller\\UserController::delete()'])) {
            return $container->privates['.service_locator.q60ydOj.App\\Controller\\UserController::delete()'];
        }

        return $container->privates['.service_locator.q60ydOj.App\\Controller\\UserController::delete()'] = $a->withContext('App\\Controller\\UserController::delete()', $container);
    }
}
