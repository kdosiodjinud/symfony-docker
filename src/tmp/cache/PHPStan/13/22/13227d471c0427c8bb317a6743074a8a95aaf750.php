<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/symfony/http-foundation/Response.php-1603316604',
   'data' => 
  array (
    'da3ed131e50f13fcc080255880018448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Response represents an HTTP response.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f39f3157e0e1aadf91b0d8f95d0ef5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ResponseHeaderBag
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d248325027e1fd0fd2d0cd073fe4553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25b3cbdf9aca6170afcb2901f64482bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72f4fea9be01e3d126e421cb58991233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Status codes translation table.
     *
     * The list of codes is complete according to the
     * {@link https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml Hypertext Transfer Protocol (HTTP) Status Code Registry}
     * (last updated 2016-03-01).
     *
     * Unless otherwise noted, the status code is defined in RFC2616.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4edc85fe2dfa17e23db8e99f75161d87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws \\InvalidArgumentException When the HTTP status code is not valid
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '607956bd7f2dd4eda634510af1c0aff5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Factory method for chainability.
     *
     * Example:
     *
     *     return Response::create($body, 200)
     *         ->setSharedMaxAge(300);
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '934459993ccf0914252aab7a7a5db6f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the Response as an HTTP string.
     *
     * The string representation of the Response is the same as the
     * one that will be sent to the client only if the prepare() method
     * has been called before.
     *
     * @return string The Response as an HTTP string
     *
     * @see prepare()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => '__toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03f1911f48d20623771e21e8d4475073' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clones the current Response instance.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => '__clone',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c85d35cebead2940156a874416bfe527' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepares the Response before it is sent to the client.
     *
     * This method tweaks the Response to ensure that it is
     * compliant with RFC 2616. Most of the changes are based on
     * the Request that is "associated" with this Response.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4899a57762beea337f016d4485afe4c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sends HTTP headers.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'sendHeaders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4982b059c9b569186ba364eaafdfe46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sends content for the current web response.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'sendContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb62dd56ceb515d2861a529378bd8c72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sends HTTP headers and content.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'send',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a01b592c7026dd064852533ea15c51e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the response content.
     *
     * @return $this
     *
     * @throws \\UnexpectedValueException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a641866bee5b5d121e9de73e1adcc6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the current response content.
     *
     * @return string|false
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02cfd0842b9d678ce85303f5afaeef2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the HTTP protocol version (1.0 or 1.1).
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setProtocolVersion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44d8c4b417a2b5dcd32083d8d6605ad2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the HTTP protocol version.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getProtocolVersion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fdef6853163bb1e9268daf2043c9b1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the response status code.
     *
     * If the status text is null it will be automatically populated for the known
     * status codes and left empty otherwise.
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException When the HTTP status code is not valid
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setStatusCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9dd6d8add7c024dc12427288f924967' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Retrieves the status code for the current web response.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getStatusCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bf49a7e8df28cb2ae518bde822594ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the response charset.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setCharset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd32e9ece839ddc2b7e274492805fbd4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Retrieves the response charset.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getCharset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e3a542bf5f8365f7eaf4483bfe350d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the response may safely be kept in a shared (surrogate) cache.
     *
     * Responses marked "private" with an explicit Cache-Control directive are
     * considered uncacheable.
     *
     * Responses with neither a freshness lifetime (Expires, max-age) nor cache
     * validator (Last-Modified, ETag) are considered uncacheable because there is
     * no way to tell when or how to remove them from the cache.
     *
     * Note that RFC 7231 and RFC 7234 possibly allow for a more permissive implementation,
     * for example "status codes that are defined as cacheable by default [...]
     * can be reused by a cache with heuristic expiration unless otherwise indicated"
     * (https://tools.ietf.org/html/rfc7231#section-6.1)
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isCacheable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76f869ca1257bfa405bfe8d787282536' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the response is "fresh".
     *
     * Fresh responses may be served from cache without any interaction with the
     * origin. A response is considered fresh when it includes a Cache-Control/max-age
     * indicator or Expires header and the calculated age is less than the freshness lifetime.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isFresh',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a04e745547f9810721fdddc5a85be4ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the response includes headers that can be used to validate
     * the response with the origin server using a conditional GET request.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isValidateable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46012d7bbac70d5956b3795cc241d14c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks the response as "private".
     *
     * It makes the response ineligible for serving other clients.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setPrivate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e3ec001e9bf6e8a64dbf63d87239451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks the response as "public".
     *
     * It makes the response eligible for serving other clients.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setPublic',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e78a4a9450a569c6001b59d498394186' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks the response as "immutable".
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setImmutable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0468de1f770b82997d400fc7c0e78c4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the response is marked as "immutable".
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isImmutable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee65938f071ea2a9faaa281a52d9f308' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the response must be revalidated by caches.
     *
     * This method indicates that the response must not be served stale by a
     * cache in any circumstance without first revalidating with the origin.
     * When present, the TTL of the response should not be overridden to be
     * greater than the value provided by the origin.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'mustRevalidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '012f54a5853d8351bc83c4e1badc0efb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the Date header as a DateTime instance.
     *
     * @throws \\RuntimeException When the header is not parseable
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getDate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f4ca448814f811d71821b67a5eab3ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the Date header.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setDate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c02ca715acacece882083f42ece17f65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the age of the response in seconds.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84ea7d87a71b5f100f61d3a39287594c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks the response stale by setting the Age header to be equal to the maximum age of the response.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'expire',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba8716488ea86fccbc1066bcb743da44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value of the Expires header as a DateTime instance.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getExpires',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c56ca0ae24f59b529bc102a09c8b6aea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the Expires HTTP header with a DateTime instance.
     *
     * Passing null as value will remove the header.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setExpires',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'defb2db59125d4e787d0d3edf5247291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the number of seconds after the time specified in the response\'s Date
     * header when the response should no longer be considered fresh.
     *
     * First, it checks for a s-maxage directive, then a max-age directive, and then it falls
     * back on an expires header. It returns null when no maximum age can be established.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f4465f99d6d5e7443ffb103a3aeb5a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the number of seconds after which the response should no longer be considered fresh.
     *
     * This methods sets the Cache-Control max-age directive.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa94ed88198e115655d9320811403343' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the number of seconds after which the response should no longer be considered fresh by shared caches.
     *
     * This methods sets the Cache-Control s-maxage directive.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setSharedMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b303212fabd71b2bc91e4d0b7b06227' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the response\'s time-to-live in seconds.
     *
     * It returns null when no freshness information is present in the response.
     *
     * When the responses TTL is <= 0, the response may not be served from cache without first
     * revalidating with the origin.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getTtl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db14983cf5007cc161012428095f8773' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the response\'s time-to-live for shared caches in seconds.
     *
     * This method adjusts the Cache-Control/s-maxage directive.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setTtl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f43880da3f7b0157a08c1c8d7cc0034' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the response\'s time-to-live for private/client caches in seconds.
     *
     * This method adjusts the Cache-Control/max-age directive.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setClientTtl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36992786e6e49d23a5bc9b492501d29d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the Last-Modified HTTP header as a DateTime instance.
     *
     * @throws \\RuntimeException When the HTTP header is not parseable
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getLastModified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e072b667b0a864e57ca14cea7d84f8aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the Last-Modified HTTP header with a DateTime instance.
     *
     * Passing null as value will remove the header.
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setLastModified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49c303d6adcd9221d5c8ea0336a76ad7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the literal value of the ETag HTTP header.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getEtag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a911551273a310e9c7a18e6fe00a369' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the ETag value.
     *
     * @param string|null $etag The ETag unique identifier or null to remove the header
     * @param bool        $weak Whether you want a weak ETag or not
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setEtag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e55e934dce7e6359e572a38bb9c169c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the response\'s cache headers (validation and/or expiration).
     *
     * Available options are: etag, last_modified, max_age, s_maxage, private, public and immutable.
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60786e2a6f9f4bf62ff0ff96a8332adf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modifies the response so that it conforms to the rules defined for a 304 status code.
     *
     * This sets the status, removes the body, and discards any headers
     * that MUST NOT be included in 304 responses.
     *
     * @return $this
     *
     * @see https://tools.ietf.org/html/rfc2616#section-10.3.5
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setNotModified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec0ae5397c616b66e1080457b8233982' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the response includes a Vary header.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'hasVary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87a30446813f96bf717258ad6fa9480e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an array of header names given in the Vary header.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'getVary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4595e766feddd55891c48f752a1a8775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the Vary header.
     *
     * @param string|array $headers
     * @param bool         $replace Whether to replace the actual value or not (true by default)
     *
     * @return $this
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'setVary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68345cc49fdb567a9a5852eaa188dd34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the Response validators (ETag, Last-Modified) match
     * a conditional value specified in the Request.
     *
     * If the Response is not modified, it sets the status code to 304 and
     * removes the actual content by calling the setNotModified() method.
     *
     * @return bool true if the Response validators match the Request, false otherwise
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isNotModified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc290cb3361687ab64dcb084973522d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is response invalid?
     *
     * @see https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isInvalid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de9b977a8bc209a9abe2ec54b17008e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is response informative?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isInformational',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75cc66d3a7798c3646d9862d158550d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is response successful?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6139aff1d6326a26270a46ef872d044e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is the response a redirect?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb8c89c6673a15f9ddd213cd4c25fa8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is there a client error?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad05c5df6cda95f208d008954fd6feff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Was there a server side error?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2140c261d88df42fc3a196c7ca217d84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is the response OK?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isOk',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7932aa7437012b27f2b0af99c74c7934' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is the response forbidden?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isForbidden',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69be72dea705aca080c02300f912f6a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is the response a not found error?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isNotFound',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39d7859779c51f84ee4b95d0a6d8e871' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is the response a redirect of some form?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isRedirect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd493c735420485411654e3e1524bb72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is the response empty?
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'isEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2c725495d3fd5bbcd3ea6935bcf080d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Cleans or flushes output buffers up to target level.
     *
     * Resulting level can be greater than target level if a non-removable buffer has been encountered.
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'closeOutputBuffers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da70f4721d765fd8f818289112f12f64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if we need to remove Cache-Control for SSL encrypted downloads when using IE < 9.
     *
     * @see http://support.microsoft.com/kb/323308
     *
     * @final
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\Response',
         'functionName' => 'ensureIEOverSSLCompatibility',
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