<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/http-kernel/Kernel.php-1603316608',
   'data' => 
  array (
    '0b0d785d5aa7e1bfa98f3fdac0af4c76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The Kernel is the heart of the Symfony system.
 *
 * It manages an environment made of bundles.
 *
 * Environment names must always start with a letter and
 * they must only contain letters and numbers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3773cb59081b5b0a2ef472b16f60102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var BundleInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b6d88547044f02d053af464e919ed72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'boot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f5ee5b4d5a5cd82e0ff8f8c66c1dd9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'reboot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c507d3970bc9e63cac0a923a12c47ffb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'terminate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5c11ed84a2cdbaa3b207a543004aa76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'shutdown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ba1f46d7a5ab92f875c9ad2365f27ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'handle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e21df9eb8a5d9d5f2422d1fa68e1ae08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a HTTP kernel from the container.
     *
     * @return HttpKernelInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getHttpKernel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fd46753f377d412ded55b1d2d745350' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getBundles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bcd7c6e983ec7d804a1cc951dfcb773' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getBundle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '325f9087b781b27d86fd5e7fd09d9e4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'locateResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0a73e623ef0d3d68802dbb136c8c99e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getEnvironment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0854105f7c751733466a3b51c68a9a65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'isDebug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b0e5c6c1d9546a5a868c017704d5a2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the application root dir (path of the project\'s composer file).
     *
     * @return string The project root dir
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getProjectDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41a3930604a11011335e90afeab7a2bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1acfd8816166a85dcfc99c16eddd24b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'setAnnotatedClassCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2535c7d56cbcc1fea1a96221c42e54b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getStartTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8daf0ae2e6abec0f6f4f4984cf744c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getCacheDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be3858df37abae0d333003e1caae5258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getLogDir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd56061a6ab7e1d367002d3962f8b24ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getCharset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a0b3ab3c7b2721f6f91300039bf6481' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the patterns defining the classes to parse and cache for annotations.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getAnnotatedClassesToCompile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de13e49499ccd2eda8660d8e4004e2b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes bundles.
     *
     * @throws \\LogicException if two bundles share a common name
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'initializeBundles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d8543823ba51b638359d8de29cb9067' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The extension point similar to the Bundle::build() method.
     *
     * Use this method to register compiler passes and manipulate the container during the building process.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b714c4f741ec780fff6ea54c81f97fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the container class.
     *
     * @throws \\InvalidArgumentException If the generated classname is invalid
     *
     * @return string The container class
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '566805ed8efd5bb5f434682f2f9fa02b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the container\'s base class.
     *
     * All names except Container must be fully qualified.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerBaseClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82a7886d6c7f79b1266ad6a64d01e66f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes the service container.
     *
     * The cached version of the service container is used when fresh, otherwise the
     * container is built.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'initializeContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62634cffcdaf06c0e1e3ca806dd0e10a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the kernel parameters.
     *
     * @return array An array of kernel parameters
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getKernelParameters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd49d90c20c34472cf2e180b0084cf9af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Builds the service container.
     *
     * @return ContainerBuilder The compiled service container
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'buildContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18c083f734ef43a90e50338e18044f3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepares the ContainerBuilder before it is compiled.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'prepareContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7b69785d1f977c147d6b79a739fc37c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a new ContainerBuilder instance used to build the service container.
     *
     * @return ContainerBuilder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerBuilder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a9499086c470206929756e476daf020' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dumps the service container to PHP code in the cache.
     *
     * @param string $class     The name of the class to generate
     * @param string $baseClass The name of the container\'s base class
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'dumpContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aea81f9dbed28390ed642302c91da1a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a loader for the container.
     *
     * @return DelegatingLoader The loader
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerLoader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '230f0a2757fedf948ecdf605325f64a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes comments from a PHP source string.
     *
     * We don\'t use the PHP php_strip_whitespace() function
     * as we want the content to be readable and well-formatted.
     *
     * @return string The PHP string with the comments removed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'stripComments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cf7882801a7043b4f00e1c2ff7d1b1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'runtimeinstantiator' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator',
          'proxydumper' => 'Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'legacydebugclassloader' => 'Symfony\\Component\\Debug\\DebugClassLoader',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'addannotatedclassestocachepass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => '__sleep',
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