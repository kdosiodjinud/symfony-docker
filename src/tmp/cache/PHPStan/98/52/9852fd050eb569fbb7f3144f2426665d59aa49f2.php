<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/config/Resource/SelfCheckingResourceInterface.php-1603316612',
   'data' => 
  array (
    'ca3fa53b64974b8f9701955c3764c1a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for Resources that can check for freshness autonomously,
 * without special support from external services.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Config\\Resource',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea24218d0fc617cc1b1e5894c7d539ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the resource has not been updated since the given timestamp.
     *
     * @param int $timestamp The last time the resource was loaded
     *
     * @return bool True if the resource has not been updated, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Config\\Resource',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
         'functionName' => 'isFresh',
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