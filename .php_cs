<?php

// Exclude cache folder (vendor is already excluded)
// and model classes generated with Propel.
$finder = PhpCsFixer\Finder::create()
  ->exclude('cache')
  ->notPath('#/model/om/#')
  ->notPath('#/model/map/#')
  ->in(__DIR__)
;

// Keep two spaces indentation, moving to four spaces
// now breaks indentation inside switch blocks and in
// multiline control statements (if, while, etc). See:
// https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/776
// https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/4502
//
// It also requires PhpCsFixer's method_argument_space
// default value, which includes ensure_fully_multiline,
// something that causes inconsistencies in templates.
return PhpCsFixer\Config::create()
  ->setIndent('  ')
  ->setRules([
    '@PhpCsFixer' => true,
    'method_argument_space' => true,
  ])
  ->setFinder($finder)
;
