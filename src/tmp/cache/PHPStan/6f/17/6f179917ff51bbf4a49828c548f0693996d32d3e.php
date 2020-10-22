<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/dotenv/Dotenv.php-1603316615',
   'data' => 
  array (
    '32f6e90af1795151b0fce618115fc316' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages .env files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '971c98c12c65dcf5057ad8a495e2d5c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var bool If `putenv()` should be used to define environment variables or not.
     *           Beware that `putenv()` is not thread safe, that\'s why this setting defaults to false
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a2b50c3c04261ff1289e5a237f5cf6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads one or several .env files.
     *
     * @param string    $path       A file to load
     * @param ...string $extraPaths A list of additional files to load
     *
     * @throws FormatException when a file has a syntax error
     * @throws PathException   when a file does not exist or is not readable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => 'load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b76f8c2ec13141e5613e6dd0c36dbe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads a .env file and the corresponding .env.local, .env.$env and .env.$env.local files if they exist.
     *
     * .env.local is always ignored in test env because tests should produce the same results for everyone.
     * .env.dist is loaded when it exists and .env is not found.
     *
     * @param string $path       A file to load
     * @param string $varName    The name of the env vars that defines the app env
     * @param string $defaultEnv The app env to use when none is defined
     * @param array  $testEnvs   A list of app envs for which .env.local should be ignored
     *
     * @throws FormatException when a file has a syntax error
     * @throws PathException   when a file does not exist or is not readable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => 'loadEnv',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8217fe64724d26e65fae84f34e6adf63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads one or several .env files and enables override existing vars.
     *
     * @param string    $path       A file to load
     * @param ...string $extraPaths A list of additional files to load
     *
     * @throws FormatException when a file has a syntax error
     * @throws PathException   when a file does not exist or is not readable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => 'overload',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fb813533653d285935152cb1a485b05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets values as environment variables (via putenv, $_ENV, and $_SERVER).
     *
     * @param array $values               An array of env variables
     * @param bool  $overrideExistingVars true when existing environment variables must be overridden
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => 'populate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cafa7ffeb33532bbfbeb6f4ab2d213c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parses the contents of an .env file.
     *
     * @param string $data The data to be parsed
     * @param string $path The original file name where data where stored (used for more meaningful error messages)
     *
     * @return array An array of env variables
     *
     * @throws FormatException when a file has a syntax error
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Dotenv',
         'uses' => 
        array (
          'formatexception' => 'Symfony\\Component\\Dotenv\\Exception\\FormatException',
          'formatexceptioncontext' => 'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext',
          'pathexception' => 'Symfony\\Component\\Dotenv\\Exception\\PathException',
          'processexception' => 'Symfony\\Component\\Process\\Exception\\ExceptionInterface',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Symfony\\Component\\Dotenv\\Dotenv',
         'functionName' => 'parse',
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