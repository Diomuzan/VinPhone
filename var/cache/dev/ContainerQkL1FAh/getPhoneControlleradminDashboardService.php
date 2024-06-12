<?php

namespace ContainerQkL1FAh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneControlleradminDashboardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nbonErD.App\Controller\PhoneController::admin_dashboard()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nbonErD.App\\Controller\\PhoneController::admin_dashboard()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'phoneRepository' => ['privates', 'App\\Repository\\PhoneRepository', 'getPhoneRepositoryService', true],
        ], [
            'entityManager' => '?',
            'phoneRepository' => 'App\\Repository\\PhoneRepository',
        ]))->withContext('App\\Controller\\PhoneController::admin_dashboard()', $container);
    }
}
