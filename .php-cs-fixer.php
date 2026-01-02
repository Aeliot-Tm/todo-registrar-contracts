<?php

/*
 * This file is part of the TODO Registrar Contracts project.
 *
 * (c) Anatoliy Melnikov <5785276@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

$rules = [
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'class_definition' => [
        'multi_line_extends_each_single_line' => true,
        'single_line' => false,
    ],
    'concat_space' => [
        'spacing' => 'one',
    ],
    'header_comment' => [
        'header' => <<<'EOF'
            This file is part of the TODO Registrar Contracts project.

            (c) Anatoliy Melnikov <5785276@gmail.com>

            This source file is subject to the MIT license that is bundled
            with this source code in the file LICENSE.
            EOF,
    ],
    'phpdoc_align' => ['align' => 'left'],
];

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder(
        (new PhpCsFixer\Finder())
        ->files()
        ->ignoreVCS(true)
        ->in(__DIR__)
        ->append(['.php-cs-fixer.php'])
    );
