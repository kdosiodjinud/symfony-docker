<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/http-kernel/TerminableInterface.php-1603316608',
   'data' => 
  array (
    '7daa98587d79adfa9ea256b7bcb02626' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Terminable extends the Kernel request/response cycle with dispatching a post
 * response event after sending the response and before shutting down the kernel.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Pierre Minnieur <pierre.minnieur@sensiolabs.de>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ae247a1ae61e69560d7dc28c24560ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Terminates a request/response cycle.
     *
     * Should be called after sending the response and before shutting down the kernel.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
         'functionName' => 'terminate',
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