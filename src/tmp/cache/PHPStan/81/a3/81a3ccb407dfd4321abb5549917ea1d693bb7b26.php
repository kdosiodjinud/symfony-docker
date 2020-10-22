<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/psr/container/src/ContainerInterface.php-1603316591',
   'data' => 
  array (
    'ceee732af3fcc234e4d0d9d54f19097c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Describes the interface of a container that exposes methods to read its entries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Container',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Container\\ContainerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26ed13bc76bf7ab02fa18f20e9ad9d44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     *
     * @return mixed Entry.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Container',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Container\\ContainerInterface',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7539f16a014cbcae147c77647809f67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
     * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Container',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Container\\ContainerInterface',
         'functionName' => 'has',
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