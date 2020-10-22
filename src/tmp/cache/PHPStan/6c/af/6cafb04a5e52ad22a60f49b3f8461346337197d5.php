<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/vendor/phpunit/phpunit/src/Framework/Assert.php-1603324674',
   'data' => 
  array (
    'c23001e7ddc2c8379bd15be9f261324e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A set of assertion methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0069a5d7a6e2324f5250e06310847d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b8d2ab45300fe0a40af7b6d2e404615' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array has a specified key.
     *
     * @param int|string         $key
     * @param array|\\ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '077fc6270ef938159dc51c2da42eee9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string         $key
     * @param array|\\ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f83abc81bf0132d9ec3d73d2939ea496' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains a needle.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc2fff20597ad835379bb149cdd5909a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain a needle.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5acbea7ce1dd612725cc66b664afede0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22cc08fb9f2647095d98363f6e7b925c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyInstancesOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7590f6d64c944876cade4b4826a453d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContainsOnly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b5706244fd3c66329c997c67b99ea37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param \\Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59224c0ac87e78114bbc57636bd8f799' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param \\Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54610fbfaebe8c5d8c5288890fafe156' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a04649cd4236b6cceca0ccb79d1c50f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fc46a94b0c52953a2578ff5acadd8bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05623de1fb2872d81ea782c90e170912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '627d1424280efceb2dfe6347d8b75b6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '819f17ffb81de94d7181efd957757bc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f93d80cf46c589db90334b73df8f52f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23084c4443a029f475b63be1fcfc7f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f16e1064577f1c123dd43853e558aae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert empty $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '909153d4419eb72659fa2304a46ff900' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !empty $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2adb47af74798fca8bfda71ea189df00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8874eb17de376f003c7eb99bdacbd295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeb2f9efdbcfa17ad93cf9102cec554e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d871a5fe5dec71b67c754bc463e807d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebc8d159cc00b808496e7019f0c34919' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cac3ae6c491d5f17b314b9fa63162aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09a89cca553c7a853db8e04e386cb8bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e908c66491d73ef73a7ac34e7583d6d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3216af87b23a304aebafce172a249dd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbcc826182dcccd08568b25a9f7c16b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b87850f2c68345de92d6a89f67b0806c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4817679943b1352040001aef9d0fc4c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFileCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1a14c189112a1c3c5a6d3c47e91c129' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFileIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '111f1a7b570f4f1fcf0fbaa56401093f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54f27ad9b28e7fbfcf24fc108d335740' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFileCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4f8c059d48a23408cd4d35bd895a864' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFileIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eddb4c3588c1b2458a03e732a1368380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b368ca8ed98e2b80bd067e47d0c7972' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28836c9ff9699fd2a3d30fbcc66cecd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4062
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45ccd8dfaaffeccccf0447eced02cc6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c9367f7c58a30cf9c76c56f28e3f68e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2547a7bea0314d85c0ff2ab3f9d7aea6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4065
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fe161d9fd8a8cb6c5094bbe263d1453' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9041a52276a58f621f8857e44f98d73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryDoesNotExist',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b631a490ed51856f10cc0b14df056a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4068
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dbdf154a62ab5bc338a094e7e0b13ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee0e6b718d71020e6b6ef028b55627ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsNotReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '115987fa23b4766a30558669bc196f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4071
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryNotIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '397042dd3ef524b3f962bff7ceb5d5e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1abb8db5ca19bac71ad72c775a6bf35a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsNotWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '943fd2b386ff6bffd5a955d6c6735f1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4074
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryNotIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9967ad1ea058712778c2660178645ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfab4b2ef46974fe3032f559f1025f7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileDoesNotExist',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bff7b817c7bf7d33d112a4215ca034ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4077
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30d6494ea53d035ad0fe58fe7376514b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4652b914b25f66e676017cd3b4557428' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsNotReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e751e7ab611a28169e42d33609793d7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4080
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7106fccba6619f41e96ea8757134e364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '112f898264bd4c8306e64257bab1f6b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsNotWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f9a9aabd8be7a1e01baf3ff3d2b3c01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4083
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2d886f222e7101495a13564d9eef6de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert true $condition
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd7d99475f5420109a75c7c8e89d3f26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !true $condition
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd307a3733712552c9627742c6211641' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert false $condition
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4228e5b4dd38afa5fa9f800de98ee2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !false $condition
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7deef15a9d7986f5d584814367f2cda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert null $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be48d6b36dba30453e3f2564b2ac41cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !null $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba7332376407c61c140854f0a395a7f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFinite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef8605543c68d29f012049ac58520dde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInfinite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebe03e59db6d3a5392697eb22f050b17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '012f3ed2eb73e98d101e18d24bddce94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class has a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70e0b0ec73e9fa4bb060804dd93ae404' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class does not have a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassNotHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b7f2e4ec32326e435be59ea595e2c66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class has a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassHasStaticAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90323740b498bdfa64480474396d816e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class does not have a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassNotHasStaticAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcd663563a358860cb4b69ae462e4298' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an object has a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c8d88ebad8ab74b048f6aa77c694275' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an object does not have a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectNotHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e90b2113425e4782fb8340508939b20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-template ExpectedType
     * @psalm-param ExpectedType $expected
     * @psalm-assert =ExpectedType $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '294d34883551b5be10540148d56089fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4efdd3123f51ce12e7a0e0791b31672' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $expected
     * @psalm-assert ExpectedType $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a3a5f91c50df79673383ec42f7adbbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $expected
     * @psalm-assert !ExpectedType $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b3ae9044c46d0da0f604d1c67846789' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type array.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert array $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f0f80f845165f461f3ea6c466af805b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type bool.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert bool $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09da1d08ea0c0181ec30f69e4a8d06ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type float.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert float $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20f8286e8e35455a1f1ba85f1e1513d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type int.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert int $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c380676c838c0070e9e7857aaac647f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type numeric.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert numeric $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3a5a7214552adc14ffadbe456701efb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert object $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c7fe5a712a12d561b8f0208ff941235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert resource $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd18e3165c10c6b292f043b2dce319dc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert string $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d6abf6b962901057fcc8b284e4b73c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type scalar.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert scalar $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0875e8fab50c666106626f92bd002f72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type callable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert callable $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0ea47a061f2332d1f8ff58c70ece83b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type iterable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert iterable $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsIterable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f8db034714274eddf18120e7cbc28ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type array.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !array $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '044a4f844b8f60ca48f35850103a63ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type bool.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !bool $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9763fc983b4e84d6d7e833df245b5c0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type float.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !float $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61fb6c9003cb7b53bfa9788c49ae847a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type int.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !int $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '773b5a6f07f981187475d388efd0eadf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type numeric.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !numeric $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8ac0bd75839100f4e64343c7dbe4ec4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !object $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb2667edb539ec7b01c292801244aa50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !resource $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b1056652654b93ccf39812edded461b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !string $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de6dcc8e19cb33e66577f40099a6a73d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type scalar.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !scalar $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e21e380f76e43bc9ead1d11e12d87b97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type callable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !callable $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8218c30db04b5ef5943b739915bb9214' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type iterable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @psalm-assert !iterable $actual
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotIterable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee2ee7803845611bcd784bf2e884f426' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertMatchesRegularExpression',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7165faf6a6abeaa94ef4c0c9529afcb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4086
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f7f758d8c97403887270d803795b05c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDoesNotMatchRegularExpression',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2918a20b68a5ee5e4ee823a2beb43c52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4089
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a17c46f5d1e8e03a0e3db81c7ae803e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param \\Countable|iterable $expected
     * @param \\Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertSameSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c46b0825b14d970d24034c48cadd470' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param \\Countable|iterable $expected
     * @param \\Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotSameSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '814ecaefa6a5e05ccb9ff00ada0bd920' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringMatchesFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b60641c5273a17fa714b12ddcbdbb1da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotMatchesFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15106a23fb7e7f72cc4cc8708966ab15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringMatchesFormatFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e5762dc209634f9714e1fd67544ff78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotMatchesFormatFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9012a3d968631d4458a0a68ada5d425d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string starts with a given prefix.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67ca0faacd6d842f0ee28dda883329ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70fbd1bf7a4fb50037216063f3c87946' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bfc9a2b1eb1c4a55c8b52cd5657bc7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '964c04a634b6d75675e7fb0f3cfd4283' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf1619cbaaba57b45ddcd8c331a963cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '803e6e67c77e3a0970d82844992584b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string ends with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEndsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6022566e9cf6755a9a169e29e81fd0b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string ends not with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEndsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fe69e29022e20f32547f5641e4b2f63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlFileEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a692306903c7eece8cc55ad62e8eba6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlFileNotEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c96917a4bcaafafef6c0ad8fa124c36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are equal.
     *
     * @param \\DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f24f293e83d94e545aa45d9a1095d3c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are not equal.
     *
     * @param \\DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringNotEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3eb779bda02f28079710c1896a2165c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are equal.
     *
     * @param \\DOMDocument|string $expectedXml
     * @param \\DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringEqualsXmlString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0099f00a3a849d998f925fc7cb3f8204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are not equal.
     *
     * @param \\DOMDocument|string $expectedXml
     * @param \\DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringNotEqualsXmlString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd51c338c561bd1f27184f26a1be7502c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @throws AssertionFailedError
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4091
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualXMLStructure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47142203302ca2096a2a0b1426e3a579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Evaluates a PHPUnit\\Framework\\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertThat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd3dc16ece5a747be6019eb34e2bdef9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1aaa87f4d921de68d043c96b9c7d5d7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringEqualsJsonString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de24be4e8e98df8048584d680f7caef8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringNotEqualsJsonString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c04888250c02331f5c65cacf8e1c84ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b19564d536240d12b7dd64ef4f0e3876' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringNotEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '966bf3b8267ad0a6ab407dc3d9c562fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonFileEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41d54ba02b39a26203dd4284c9e0c81a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonFileNotEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae75686e9cfa1f0be47671502696a665' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'logicalAnd',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '306f6f70f89fc335ddbe73242bd04b73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int|string $key
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'arrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56ac436f0105c8d593db3721e37bc6af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     *
     * @psalm-return never-return
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'fail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a41dde3e02fcaed37ba32223802f3a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     *
     * @psalm-return never-return
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'markTestIncomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cebbee75a9feca188b3ea121b4302ccc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the test as skipped.
     *
     * @throws SkippedTestError
     * @throws SyntheticSkippedError
     *
     * @psalm-return never-return
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'markTestSkipped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cd4c781d3c7ca9a1e9ac26d1375d140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the current assertion count.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'getCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '186f29e0e98bb8da5ab671f7442e25a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the assertion counter.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'resetCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21fbc851261164022e8ac3891d275099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @codeCoverageIgnore
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'createWarning',
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