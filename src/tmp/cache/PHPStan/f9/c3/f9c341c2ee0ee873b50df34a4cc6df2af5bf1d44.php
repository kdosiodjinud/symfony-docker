<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/http-kernel/RebootableInterface.php-1603316608',
   'data' => 
  array (
    '9a7092e8a9e612ced8f30714fdde2fd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows the Kernel to be rebooted using a temporary cache directory.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\RebootableInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a123085bd8ffc91fb43682d2d42f2543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reboots a kernel.
     *
     * The getCacheDir() method of a rebootable kernel should not be called
     * while building the container. Use the %kernel.cache_dir% parameter instead.
     *
     * @param string|null $warmupDir pass null to reboot in the regular cache directory
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\RebootableInterface',
         'functionName' => 'reboot',
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