<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/src/Kernel.php-1603403570,/var/www/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php-1603316614',
   'data' => 
  array (
    '04d7c5cfd98d2629c1686a4646f92609' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Kernel that provides configuration hooks.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollectionbuilder' => 'Symfony\\Component\\Routing\\RouteCollectionBuilder',
        ),
         'className' => 'App\\Kernel',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a46efa5852792eaa665f8d9b31c3e9d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add or import routes into your application.
     *
     *     $routes->import(\'config/routing.yml\');
     *     $routes->add(\'/admin\', \'App\\Controller\\AdminController::dashboard\', \'admin_dashboard\');
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollectionbuilder' => 'Symfony\\Component\\Routing\\RouteCollectionBuilder',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'configureRoutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17c527d8dea57bab6b92a8e3d163d6b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Configures the container.
     *
     * You can register extensions:
     *
     *     $c->loadFromExtension(\'framework\', [
     *         \'secret\' => \'%secret%\'
     *     ]);
     *
     * Or services:
     *
     *     $c->register(\'halloween\', \'FooBundle\\HalloweenProvider\');
     *
     * Or parameters:
     *
     *     $c->setParameter(\'halloween\', \'lot of fun\');
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollectionbuilder' => 'Symfony\\Component\\Routing\\RouteCollectionBuilder',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'configureContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6f9a30d6d226bd9ff8b65ab7ecd6c76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollectionbuilder' => 'Symfony\\Component\\Routing\\RouteCollectionBuilder',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'registerContainerConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1da28e1415b31077d861a25263a03f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollectionbuilder' => 'Symfony\\Component\\Routing\\RouteCollectionBuilder',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'loadRoutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));