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
    // TODO: see https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/776
    'braces' => false,
    // TODO: PhpCsFixer config breaks templates
    'method_argument_space' => true,
    // TODO: try, do and else are removed from the default constructs
    // because it moves the brackets to the same line. Use default
    // constructs after braces fixer is enabled.
    'single_space_after_construct' => [
      'constructs' => [
        'abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class',
        'clone', 'comment', 'const', 'const_import', 'continue', 'echo',
        'elseif', 'extends', 'final', 'finally', 'for', 'foreach',
        'function', 'function_import', 'global', 'goto', 'if', 'implements',
        'include', 'include_once', 'instanceof', 'insteadof', 'interface',
        'match', 'named_argument', 'new', 'open_tag_with_echo', 'php_doc',
        'php_open', 'print', 'private', 'protected', 'public', 'require',
        'require_once', 'return', 'static', 'throw', 'trait', 'use',
        'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from',
      ],
    ],
  ])
  ->setFinder($finder)
;
