<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/http-kernel/KernelInterface.php-1603316608',
   'data' => 
  array (
    'add78c33baf46cfa8639efb8470b7034' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The Kernel is the heart of the Symfony system.
 *
 * It manages an environment made of application kernel and bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c159dcbf9b68b6b7edad2f4219a3565' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an array of bundles to register.
     *
     * @return iterable|BundleInterface[] An iterable of bundle instances
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'registerBundles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec5b32932180cab8e79955bb51516ae0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads the container configuration.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'registerContainerConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96c49864850eb495a48b5a564fdef829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Boots the current kernel.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'boot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82b78d924f9567734d2ceeb3ede494c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Shutdowns the kernel.
     *
     * This method is mainly useful when doing functional testing.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'shutdown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '221424759b3c83d8a477065be92dc26f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered bundle instances.
     *
     * @return BundleInterface[] An array of registered bundle instances
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getBundles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc79ac3c5709e3a22daa624eda7ef634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a bundle.
     *
     * @return BundleInterface A BundleInterface instance
     *
     * @throws \\InvalidArgumentException when the bundle is not enabled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getBundle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74eb8498f0583de7d5cb63d576fd4223' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the file path for a given bundle resource.
     *
     * A Resource can be a file or a directory.
     *
     * The resource name must follow the following pattern:
     *
     *     "@BundleName/path/to/a/file.something"
     *
     * where BundleName is the name of the bundle
     * and the remaining part is the relative path in the bundle.
     *
     * @return string The absolute path of the resource
     *
     * @throws \\InvalidArgumentException if the file cannot be found or the name is not valid
     * @throws \\RuntimeException         if the name contains invalid/unsafe characters
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'locateResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86ba3698460adc4f3057664c0bc517fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the environment.
     *
     * @return string The current environment
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getEnvironment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5086648f0bfbdc0ee2833b72702f8031' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if debug mode is enabled.
     *
     * @return bool true if debug mode is enabled, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'isDebug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e83fa440bb46f20be26808519b9e7b93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the project dir (path of the project\'s composer file).
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getProjectDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8496bb72b353a72ab557c3b6dd05c390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the current container.
     *
     * @return ContainerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77441a84999637240346b5384d698f29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the request start time (not available if debug is disabled).
     *
     * @return float The request start timestamp
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getStartTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbfc9824d14d08caab919677e57e7537' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the cache directory.
     *
     * @return string The cache directory
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getCacheDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '490f7d1218250210b9ef535ba92003b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the log directory.
     *
     * @return string The log directory
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getLogDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a82fc62316a15b260f96645f0021b077' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the charset of the application.
     *
     * @return string The charset
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getCharset',
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