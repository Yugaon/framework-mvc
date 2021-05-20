<?php

namespace ContainerI46IYYQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ContextListener_0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ContextListener.php';

        return $container->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.users_in_memory'] ?? ($container->privates['security.user.provider.concrete.users_in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])));
        }, 1), 'main', ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }
}
