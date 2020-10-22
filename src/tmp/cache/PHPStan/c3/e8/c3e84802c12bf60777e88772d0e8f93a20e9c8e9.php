<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/framework-bundle/Controller/AbstractController.php-1603316614',
   'data' => 
  array (
    '9a367d80e2aa47271881f38cb677a1a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common features needed in controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0ef427bf4b30d06fc72b11cd9bacd48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ContainerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa2021a184a9b4c9f91e4651871a8997' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     * @required
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'setContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0738eac90664067f6681f360c30e9650' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a container parameter by its name.
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'getParameter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c97ea3be7dec8a0e8717c33beb00b4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the service id is defined.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a08988b483af214a3ee4e7efca7428aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a container service by its id.
     *
     * @return object The service
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69f614d5b107c56cbed42406a2adb3f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Generates a URL from the given parameters.
     *
     * @see UrlGeneratorInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'generateUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be65ddf13d8753b12e9cd66ade8319b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Forwards the request to another controller.
     *
     * @param string $controller The controller name (a string like Bundle\\BlogBundle\\Controller\\PostController::indexAction)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'forward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fb3f779e857d05d9e56f84680c814b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a RedirectResponse to the given URL.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'redirect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f60e1eb44913cac8d6d8ca2e4d1ffac9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a RedirectResponse to the given route with the given parameters.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'redirectToRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79430ca34fb7fc533cf66f4f90e646ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a JsonResponse that uses the serializer component if enabled, or json_encode.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'json',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e97b879aa68e7caae678c202789d5501' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a BinaryFileResponse object with original or customized file name and disposition header.
     *
     * @param \\SplFileInfo|string $file File object or path to file to be sent as response
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'file',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24bc31a8b2263c73bfb8a70d0539f8e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a flash message to the current session for type.
     *
     * @throws \\LogicException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'addFlash',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3a5364503ce57e310f728f2f64203f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the attributes are granted against the current authentication token and optionally supplied subject.
     *
     * @throws \\LogicException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'isGranted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03852cb62c976b4139cb1b91c21d27b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Throws an exception unless the attributes are granted against the current authentication token and optionally
     * supplied subject.
     *
     * @throws AccessDeniedException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'denyAccessUnlessGranted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5be28e81406d243dbfe19c120857817a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a rendered view.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'renderView',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77f70556cc859c7aac64f64508cf2265' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Renders a view.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8067bbcc220c20f8a9be33246a23c2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Streams a view.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'stream',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8289fcea1b75dc5b2c0e48bee2093c64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a NotFoundHttpException.
     *
     * This will result in a 404 response code. Usage example:
     *
     *     throw $this->createNotFoundException(\'Page not found!\');
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'createNotFoundException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3013c795af15a676b048a6422c625037' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an AccessDeniedException.
     *
     * This will result in a 403 response code. Usage example:
     *
     *     throw $this->createAccessDeniedException(\'Unable to access this page!\');
     *
     * @throws \\LogicException If the Security component is not available
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'createAccessDeniedException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfb282517600f3a687b9033d293a1c50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates and returns a Form instance from the type of the form.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'createForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7832b343cb81836049aec166511df10e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates and returns a form builder instance.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'createFormBuilder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79e7592dd155a329114a915c24afc8d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Shortcut to return the Doctrine Registry service.
     *
     * @throws \\LogicException If DoctrineBundle is not available
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'getDoctrine',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45a3557114e927f1de0d50fccb87356f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a user from the Security Token Storage.
     *
     * @return mixed
     *
     * @throws \\LogicException If SecurityBundle is not available
     *
     * @see TokenInterface::getUser()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'getUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69f6879870e7a58d8e8d51a0e3045edf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks the validity of a CSRF token.
     *
     * @param string      $id    The id used when generating the token
     * @param string|null $token The actual token sent with the request that should be validated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'isCsrfTokenValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2b8ee17acaf37c94f930b40b804bda7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dispatches a message to the bus.
     *
     * @param object|Envelope $message The message or the message pre-wrapped in an envelope
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'dispatchMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52a90f0fa072932616f83af41aa396bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a Link HTTP header to the current response.
     *
     * @see https://tools.ietf.org/html/rfc5988
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Controller',
         'uses' => 
        array (
          'managerregistry' => 'Doctrine\\Common\\Persistence\\ManagerRegistry',
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'linkinterface' => 'Psr\\Link\\LinkInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'containerbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface',
          'formtype' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
          'formbuilderinterface' => 'Symfony\\Component\\Form\\FormBuilderInterface',
          'formfactoryinterface' => 'Symfony\\Component\\Form\\FormFactoryInterface',
          'forminterface' => 'Symfony\\Component\\Form\\FormInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'responseheaderbag' => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
          'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'envelope' => 'Symfony\\Component\\Messenger\\Envelope',
          'messagebusinterface' => 'Symfony\\Component\\Messenger\\MessageBusInterface',
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
          'routerinterface' => 'Symfony\\Component\\Routing\\RouterInterface',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'csrftokenmanagerinterface' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface',
          'serializerinterface' => 'Symfony\\Component\\Serializer\\SerializerInterface',
          'addlinkheaderlistener' => 'Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener',
          'genericlinkprovider' => 'Symfony\\Component\\WebLink\\GenericLinkProvider',
          'servicesubscriberinterface' => 'Symfony\\Contracts\\Service\\ServiceSubscriberInterface',
          'environment' => 'Twig\\Environment',
        ),
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
         'functionName' => 'addLink',
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