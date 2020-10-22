<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/dependency-injection/ContainerInterface.php-1603316610',
   'data' => 
  array (
    'd9f28bdfaf54dce5bb9a641ab0fcf658' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ContainerInterface is the interface implemented by service container classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9ce32a2106418829fb873aab4288659' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a service.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff378c6ec988aff5cfbdb0810ff9de07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a service.
     *
     * @param string $id              The service identifier
     * @param int    $invalidBehavior The behavior when the service does not exist
     *
     * @return object|null The associated service
     *
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     *
     * @see Reference
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4902e0cfd76b07187dfb281d277a6c59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the given service is defined.
     *
     * @param string $id The service identifier
     *
     * @return bool true if the service is defined, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de0c8642f2eb49d8bb1e039a4831bf03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check for whether or not a service has been initialized.
     *
     * @return bool true if the service has been initialized, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'initialized',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b058a7c7a55769bb706ace2352bc51cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a parameter.
     *
     * @param string $name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws InvalidArgumentException if the parameter is not defined
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'getParameter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dec6e2d60ee03e258a66c08faa643f24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if a parameter exists.
     *
     * @param string $name The parameter name
     *
     * @return bool The presence of parameter in container
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'hasParameter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2dabfe6cc62d657c84518c404a082a73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a parameter.
     *
     * @param string $name  The parameter name
     * @param mixed  $value The parameter value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
         'functionName' => 'setParameter',
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