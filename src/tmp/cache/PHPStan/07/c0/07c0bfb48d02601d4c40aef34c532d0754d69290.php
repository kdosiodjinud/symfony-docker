<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/config/Resource/ResourceInterface.php-1603316612',
   'data' => 
  array (
    'ff730cadf26b08dcdf99b1805da4e34f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ResourceInterface is the interface that must be implemented by all Resource classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Config\\Resource',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a839866189e5e1aaa24e330ffe47fa2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a string representation of the Resource.
     *
     * This method is necessary to allow for resource de-duplication, for example by means
     * of array_unique(). The string returned need not have a particular meaning, but has
     * to be identical for different ResourceInterface instances referring to the same
     * resource; and it should be unlikely to collide with that of other, unrelated
     * resource instances.
     *
     * @return string A string representation unique to the underlying Resource
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Config\\Resource',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
         'functionName' => '__toString',
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