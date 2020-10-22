<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/dependency-injection/ContainerBuilder.php-1603316610',
   'data' => 
  array (
    '87aadc956ef81b9a564b2592208a1824' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ContainerBuilder is a DI container that provides an API to easily describe services.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '764c1db5f28e2cef6b055a9979926e7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ExtensionInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32b5200a89c443841f6fe97454d443d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Definition[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab5069cccc89f25b3f500d2fc1618b57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Alias[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '702b9001ed4ab74f69d202117227a8d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ResourceInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60b0da7d065945cea90e8caa14e74892' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Compiler
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21ff56268645305f5fd539efcaacfe63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var InstantiatorInterface|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a83b76b2f405c620edc0002711390acb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ExpressionLanguage|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b8307921ce6cbc1def8e6c532457c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ExpressionFunctionProviderInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fff97d5727b93ff2b59c0a41b72ef6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string[] with tag names used by findTaggedServiceIds
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd78dfff191b1b67cb97628e9fe526b83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string[][] a map of env var names to their placeholders
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0cdb9361e6604d3eeed00bec2f11ced1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int[] a map of env vars to their resolution counter
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f46f8cff94823e585c939618377071b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string[] the list of vendor directories
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3459cfa14b50a50ea4947f21018e8db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var \\ReflectionClass[] a list of class reflectors
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13bae55255494b0c5a2028cebdcb68a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the track resources flag.
     *
     * If you are not using the loaders and therefore don\'t want
     * to depend on the Config component, set this flag to false.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setResourceTracking',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8045519d91872301a7169d49df9418a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if resources are tracked.
     *
     * @return bool true If resources are tracked, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'isTrackingResources',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b287b96bef6f9e2373b54ce6be5c90f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the instantiator to be used when fetching proxies.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setProxyInstantiator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1b4363123f978f6ebb62d9ec2375760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an extension by alias or namespace.
     *
     * @return ExtensionInterface An extension instance
     *
     * @throws LogicException if the extension is not registered
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f057c0412373bf7805f23979c5f90c3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all registered extensions.
     *
     * @return ExtensionInterface[] An array of ExtensionInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getExtensions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de6aab676dc45e5893d73b6e694fd1f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if we have an extension.
     *
     * @return bool If the extension exists
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'hasExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e9377fd4a35875594cd764c114accc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an array of resources loaded to build this configuration.
     *
     * @return ResourceInterface[] An array of resources
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getResources',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35f630d5022e78e0fa8b4522ecbd0c6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'addResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61ade317386076dbfdc38a3f2051dc93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the resources for this configuration.
     *
     * @param ResourceInterface[] $resources An array of resources
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setResources',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06abfdafd91d4e66aa3d8d1f615a6ffe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds the object class hierarchy as resources.
     *
     * @param object|string $object An object instance or class name
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'addObjectResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a18ffa243638e1ee37be9ed89a53cf9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Retrieves the requested reflection class and registers it for resource tracking.
     *
     * @throws \\ReflectionException when a parent class/interface/trait is not found and $throw is true
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getReflectionClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6df4c20c8adb0818a5fa61837fedaafb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the requested file or directory exists and registers the result for resource tracking.
     *
     * @param string      $path          The file or directory path for which to check the existence
     * @param bool|string $trackContents Whether to track contents of the given resource. If a string is passed,
     *                                   it will be used as pattern for tracking contents of the requested directory
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'fileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1936ddb0d6bbdd59c7902856b0e559e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads the configuration for an extension.
     *
     * @param string $extension The extension alias or namespace
     * @param array  $values    An array of values that customizes the extension
     *
     * @return $this
     *
     * @throws BadMethodCallException When this ContainerBuilder is compiled
     * @throws \\LogicException        if the extension is not registered
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'loadFromExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6967fd87259cebd7cce6cc58888ffef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a compiler pass.
     *
     * @param string $type     The type of compiler pass
     * @param int    $priority Used to sort the passes
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'addCompilerPass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '286d471b75439549c286a84c444c2650' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the compiler pass config which can then be modified.
     *
     * @return PassConfig The compiler pass config
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getCompilerPassConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '321961e39a34185a226dba06666349cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the compiler.
     *
     * @return Compiler The compiler
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getCompiler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1b872d4e41b05dcd9f665784974de77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a service.
     *
     * @throws BadMethodCallException When this ContainerBuilder is compiled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80b55636a14cf6d8a08eea8320324928' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes a service definition.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'removeDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca6a618d4cf0e8606835012364137a71' => 
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
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8fae1b7bca5c3774c6bb8b6f24571f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a service.
     *
     * @param string $id              The service identifier
     * @param int    $invalidBehavior The behavior when the service does not exist
     *
     * @return object|null The associated service
     *
     * @throws InvalidArgumentException          when no definitions are available
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     * @throws \\Exception
     *
     * @see Reference
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0428109da480e41220370ac11677f3bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Merges a ContainerBuilder with the current ContainerBuilder configuration.
     *
     * Service definitions overrides the current defined ones.
     *
     * But for parameters, they are overridden by the current ones. It allows
     * the parameters passed to the container constructor to have precedence
     * over the loaded ones.
     *
     *     $container = new ContainerBuilder(new ParameterBag([\'foo\' => \'bar\']));
     *     $loader = new LoaderXXX($container);
     *     $loader->load(\'resource_name\');
     *     $container->register(\'foo\', \'stdClass\');
     *
     * In the above example, even if the loaded resource defines a foo
     * parameter, the value will still be \'bar\' as defined in the ContainerBuilder
     * constructor.
     *
     * @throws BadMethodCallException When this ContainerBuilder is compiled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '313f1d06c95e4b687d38233e2550499b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the configuration array for the given extension.
     *
     * @return array An array of configuration
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getExtensionConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35227063020f9a5852a19ad1f4ca8186' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepends a config array to the configs of the given extension.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'prependExtensionConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0bb4b37123e6c88537c2f32c69d035a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compiles the container.
     *
     * This method passes the container to compiler
     * passes whose job is to manipulate and optimize
     * the container.
     *
     * The main compiler passes roughly do four things:
     *
     *  * The extension configurations are merged;
     *  * Parameter values are resolved;
     *  * The parameter bag is frozen;
     *  * Extension loading is disabled.
     *
     * @param bool $resolveEnvPlaceholders Whether %env()% parameters should be resolved using the current
     *                                     env vars or be replaced by uniquely identifiable placeholders.
     *                                     Set to "true" when you want to use the current ContainerBuilder
     *                                     directly, keep to "false" when the container is dumped instead.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'compile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5210fd58661d293c63d87f6c210ba14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getServiceIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7ba620b534263be68cac28265449030' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets removed service or alias ids.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getRemovedIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '389778df53e5085415571011a4151e7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds the service aliases.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'addAliases',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '660cc62f0981ab240554983cf239fbf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the service aliases.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setAliases',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '955b86b5080a00276a8cd843ed298a85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets an alias for an existing service.
     *
     * @param string       $alias The alias to create
     * @param string|Alias $id    The service to alias
     *
     * @return Alias
     *
     * @throws InvalidArgumentException if the id is not a string or an Alias
     * @throws InvalidArgumentException if the alias is for itself
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a124e26ff62c125787bd67598e45f19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes an alias.
     *
     * @param string $alias The alias to remove
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'removeAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fa5260770dbaf7ecd75ce1110b7318e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if an alias exists under the given identifier.
     *
     * @return bool true if the alias exists, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'hasAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03b02baa15a43b4156e5de19c5d8e46d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets all defined aliases.
     *
     * @return Alias[] An array of aliases
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getAliases',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd3411804ba61b1c3352c4c8cdf5e04b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets an alias.
     *
     * @return Alias An Alias instance
     *
     * @throws InvalidArgumentException if the alias does not exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '344d0b444e84df69a89433cabe01e3cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers a service definition.
     *
     * This methods allows for simple registration of service definition
     * with a fluid interface.
     *
     * @return Definition A Definition instance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'register',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5193d30908754f6130d3ece5d3242ff7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers an autowired service definition.
     *
     * This method implements a shortcut for using setDefinition() with
     * an autowired definition.
     *
     * @return Definition The created definition
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'autowire',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe9a652b9c5f2ea2a34585436fae6ad8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds the service definitions.
     *
     * @param Definition[] $definitions An array of service definitions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'addDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd62a9d8c6b288b011d50f1533942198f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the service definitions.
     *
     * @param Definition[] $definitions An array of service definitions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f778bfc0a5c31c70163a939d78dfcbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets all service definitions.
     *
     * @return Definition[] An array of Definition instances
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '875c18c2b3afb75d8dd5e1db84e5306a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a service definition.
     *
     * @return Definition the service definition
     *
     * @throws BadMethodCallException When this ContainerBuilder is compiled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4bceb0f93bdc58532594fcd9b5439c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if a service definition exists under the given identifier.
     *
     * @return bool true if the service definition exists, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'hasDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '608ac3ad6869a6043c276d31fe9edb98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a service definition.
     *
     * @return Definition A Definition instance
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3114201f7c476cae851399aaa3395a78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a service definition by id or alias.
     *
     * The method "unaliases" recursively to return a Definition instance.
     *
     * @return Definition A Definition instance
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'findDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f338f64e356ecf138266858178de4061' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a service for a service definition.
     *
     * @return mixed The service described by the service definition
     *
     * @throws RuntimeException         When the factory definition is incomplete
     * @throws RuntimeException         When the service is a synthetic service
     * @throws InvalidArgumentException When configure callable is not callable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'createService',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ced975d6320d18b528ce50317d2b97a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Replaces service references by the real service instance and evaluates expressions.
     *
     * @param mixed $value A value
     *
     * @return mixed The same value with all service references replaced by
     *               the real service instances and all expressions evaluated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'resolveServices',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f717af41ca0848f59782c12fc6eb5f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns service ids for a given tag.
     *
     * Example:
     *
     *     $container->register(\'foo\')->addTag(\'my.tag\', [\'hello\' => \'world\']);
     *
     *     $serviceIds = $container->findTaggedServiceIds(\'my.tag\');
     *     foreach ($serviceIds as $serviceId => $tags) {
     *         foreach ($tags as $tag) {
     *             echo $tag[\'hello\'];
     *         }
     *     }
     *
     * @return array An array of tags with the tagged service as key, holding a list of attribute arrays
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'findTaggedServiceIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96eb03c98faddd60d31acefa2e5c14b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all tags the defined services use.
     *
     * @return array An array of tags
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'findTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b6343f49d82a63826f8e06e98f58c58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all tags not queried by findTaggedServiceIds.
     *
     * @return string[] An array of tags
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'findUnusedTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '566d082c95e2f538dd9c94a3fccee64f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return ExpressionFunctionProviderInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getExpressionLanguageProviders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c27897f7d331336117305fbc4248f83c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a ChildDefinition that will be used for autoconfiguring the interface/class.
     *
     * @return ChildDefinition
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'registerForAutoconfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd68814ac9ba62a04d037bdad63145451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers an autowiring alias that only binds to a specific argument name.
     *
     * The argument name is derived from $name if provided (from $id otherwise)
     * using camel case: "foo.bar" or "foo_bar" creates an alias bound to
     * "$fooBar"-named arguments with $type as type-hint. Such arguments will
     * receive the service $id when autowiring is used.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'registerAliasForArgument',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9adcfa1d824f43ef67238a601bccbdcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an array of ChildDefinition[] keyed by interface.
     *
     * @return ChildDefinition[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getAutoconfiguredInstanceof',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '578c587a25bf5dfe4be1adb3ba9c38b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resolves env parameter placeholders in a string or an array.
     *
     * @param mixed            $value     The value to resolve
     * @param string|true|null $format    A sprintf() format returning the replacement for each env var name or
     *                                    null to resolve back to the original "%env(VAR)%" format or
     *                                    true to resolve to the actual values of the referenced env vars
     * @param array            &$usedEnvs Env vars found while resolving are added to this array
     *
     * @return mixed The value with env parameters resolved if a string or an array is passed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'resolveEnvPlaceholders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd889d5cd573efe5139b400f252f4db9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get statistics about env usage.
     *
     * @return int[] The number of time each env vars has been resolved
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getEnvCounters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1beb28353fca26c07eb9e99ee61af277' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'log',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0bc2c2a92fbc9db5ea0976454a9dd8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets removed binding ids.
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getRemovedBindingIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0f4567c3a6562b0e1c1b577e19c3f71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes bindings for a service.
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'removeBindings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'daf68f04f4fdc54d72ba3f24ad4d65a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the Service Conditionals.
     *
     * @param mixed $value An array of conditionals to return
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getServiceConditionals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c63afa22e08ada3fa2683f32c81db4bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the initialized conditionals.
     *
     * @param mixed $value An array of conditionals to return
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getInitializedConditionals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11aee11499ddf146d38df81e4c82ecdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Computes a reasonably unique hash of a value.
     *
     * @param mixed $value A serializable value
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'hash',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0964ae8241f358c9c3f7bd94c2e2a584' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getEnv',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '791d0b5d003f6b759dd565b010be4dd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Shares a given service in the container.
     *
     * @param mixed $service
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'psrcontainerinterface' => 'Psr\\Container\\ContainerInterface',
          'classexistenceresource' => 'Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
          'composerresource' => 'Symfony\\Component\\Config\\Resource\\ComposerResource',
          'directoryresource' => 'Symfony\\Component\\Config\\Resource\\DirectoryResource',
          'fileexistenceresource' => 'Symfony\\Component\\Config\\Resource\\FileExistenceResource',
          'fileresource' => 'Symfony\\Component\\Config\\Resource\\FileResource',
          'globresource' => 'Symfony\\Component\\Config\\Resource\\GlobResource',
          'reflectionclassresource' => 'Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
          'resourceinterface' => 'Symfony\\Component\\Config\\Resource\\ResourceInterface',
          'iteratorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument',
          'rewindablegenerator' => 'Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator',
          'serviceclosureargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument',
          'servicelocator' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator',
          'servicelocatorargument' => 'Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument',
          'compiler' => 'Symfony\\Component\\DependencyInjection\\Compiler\\Compiler',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'resolveenvplaceholderspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\ResolveEnvPlaceholdersPass',
          'badmethodcallexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'instantiatorinterface' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\InstantiatorInterface',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
          'expression' => 'Symfony\\Component\\ExpressionLanguage\\Expression',
          'expressionfunctionproviderinterface' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'shareService',
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