<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/service-contracts/ResetInterface.php-1603316592',
   'data' => 
  array (
    'd3c2371923cfb03584b6ff59448339d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a way to reset an object to its initial state.
 *
 * When calling the "reset()" method on an object, it should be put back to its
 * initial state. This usually means clearing any internal buffers and forwarding
 * the call to internal dependencies. All properties of the object should be put
 * back to the same state it had when it was first ready to use.
 *
 * This method could be called, for example, to recycle objects that are used as
 * services, so that they can be used to handle several requests in the same
 * process loop (note that we advise making your services stateless instead of
 * implementing this interface when possible.)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Contracts\\Service',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Contracts\\Service\\ResetInterface',
         'functionName' => NULL,
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