<?php

$finder = PhpCsFixer\Finder::create()
  ->exclude('cache')  // vendor is already excluded
  ->notPath('#/model/om/#')
  ->notPath('#/model/map/#')
  ->in(__DIR__)
;

return PhpCsFixer\Config::create()
  ->setCacheFile(__DIR__.'/.php_cs.cache')
  ->setIndent('  ')
  ->setRules([
    '@PhpCsFixer' => true,
    // TODO: PhpCsFixer config breaks templates
    'method_argument_space' => true,
  ])
  ->setFinder($finder)
;
