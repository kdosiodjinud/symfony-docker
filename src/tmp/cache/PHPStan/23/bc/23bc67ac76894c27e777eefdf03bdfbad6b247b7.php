<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/service-contracts/ServiceSubscriberInterface.php-1603316592',
   'data' => 
  array (
    '6fbe0886c3276921f57ad8e9cd71bfae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A ServiceSubscriber exposes its dependencies via the static {@link getSubscribedServices} method.
 *
 * The getSubscribedServices method returns an array of service types required by such instances,
 * optionally keyed by the service names used internally. Service types that start with an interrogation
 * mark "?" are optional, while the other ones are mandatory service dependencies.
 *
 * The injected service locators SHOULD NOT allow access to any other services not specified by the method.
 *
 * It is expected that ServiceSubscriber instances consume PSR-11-based service locators internally.
 * This interface does not dictate any injection method for these service locators, although constructor
 * injection is recommended.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Contracts\\Service',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ab3eb449a6d77728b5f579a3c12fcfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an array of service types required by such instances, optionally keyed by the service names used internally.
     *
     * For mandatory dependencies:
     *
     *  * [\'logger\' => \'Psr\\Log\\LoggerInterface\'] means the objects use the "logger" name
     *    internally to fetch a service which must implement Psr\\Log\\LoggerInterface.
     *  * [\'loggers\' => \'Psr\\Log\\LoggerInterface[]\'] means the objects use the "loggers" name
     *    internally to fetch an iterable of Psr\\Log\\LoggerInterface instances.
     *  * [\'Psr\\Log\\LoggerInterface\'] is a shortcut for
     *  * [\'Psr\\Log\\LoggerInterface\' => \'Psr\\Log\\LoggerInterface\']
     *
     * otherwise:
     *
     *  * [\'logger\' => \'?Psr\\Log\\LoggerInterface\'] denotes an optional dependency
     *  * [\'loggers\' => \'?Psr\\Log\\LoggerInterface[]\'] denotes an optional iterable dependency
     *  * [\'?Psr\\Log\\LoggerInterface\'] is a shortcut for
     *  * [\'Psr\\Log\\LoggerInterface\' => \'?Psr\\Log\\LoggerInterface\']
     *
     * @return array The required service types, optionally keyed by service names
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Contracts\\Service',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
         'functionName' => 'getSubscribedServices',
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