<?php

return new PhpCsFixer\Config()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'multiline_whitespace_before_semicolons' => true,
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    ])
    ->setFinder(PhpCsFixer\Finder::create()->in(__DIR__));
