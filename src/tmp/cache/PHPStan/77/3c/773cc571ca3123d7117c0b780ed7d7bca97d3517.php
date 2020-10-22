<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/http-kernel/HttpKernelInterface.php-1603316608',
   'data' => 
  array (
    'dc3b480a65b235d50813f8fd621d379c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * HttpKernelInterface handles a Request to convert it to a Response.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b50829c34e48ecc091c8cc9a5525b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handles a Request to convert it to a Response.
     *
     * When $catch is true, the implementation must catch all exceptions
     * and do its best to convert them to a Response instance.
     *
     * @param int  $type  The type of the request
     *                    (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     * @param bool $catch Whether to catch exceptions or not
     *
     * @return Response A Response instance
     *
     * @throws \\Exception When an Exception occurs during processing
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
         'functionName' => 'handle',
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