<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php-1603316614',
   'data' => 
  array (
    '27f18756bded7cf10de0499c1015d7c7' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f0ad37e7267b83e46e0eafe37cc0186' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
         'functionName' => 'configureRoutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95316fc4e78f3c8e683dc3a58681f34d' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
         'functionName' => 'configureContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4d9dd874a6eb4cd9a3de69e136282cc' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
         'functionName' => 'registerContainerConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71ab8275a2952e531a9a7e608d7cf71b' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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