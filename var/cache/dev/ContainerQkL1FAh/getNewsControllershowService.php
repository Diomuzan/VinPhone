<?php

namespace ContainerQkL1FAh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q9gYYmg.App\Controller\NewsController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q9gYYmg.App\\Controller\\NewsController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'news' => ['privates', '.errored..service_locator.q9gYYmg.App\\Entity\\News', NULL, 'Cannot autowire service ".service_locator.q9gYYmg": it needs an instance of "App\\Entity\\News" but this type has been excluded in "config/services.yaml".'],
        ], [
            'news' => 'App\\Entity\\News',
        ]))->withContext('App\\Controller\\NewsController::show()', $container);
    }
}
