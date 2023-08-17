<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
$header = <<<'EOF'
This file is part of Hyperf.

@link     https://www.hyperf.io
@document https://hyperf.wiki
@contact  group@hyperf.io
@license  https://github.com/hyperf/hyperf/blob/master/LICENSE
EOF;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        // 遵循 PSR2 的标准
        '@PSR2' => true,
        '@Symfony' => true,
        '@DoctrineAnnotation' => true,
        '@PhpCsFixer' => true,
        'header_comment' => [
            // (‘comment’, ‘PHPDoc’): comment syntax type; defaults to ‘comment’; DEPRECATED alias: commentType
            'comment_type' => 'PHPDoc',
            // 'header' => $header,
            //  (‘both’, ‘bottom’, ‘none’, ‘top’): whether the header should be separated from the file content with a new line; defaults to ‘both’
            'separate' => 'none',
            // location (‘after_declare_strict’, ‘after_open’): the location of the inserted header; defaults to ‘after_declare_strict’
            'location' => 'after_declare_strict',
        ],
        'array_syntax' => [
            // long (默认，用array关键字来定义数组)
            // short (用[]关键字来定义数组)
            'syntax' => 'short',
        ],
        'list_syntax' => [
            // syntax (‘long’, ‘short’): whether to use the long or short list syntax; defaults to ‘long’
            'syntax' => 'short',
        ],
        // 连接字符是否需要空格
        'concat_space' => [
            // none (默认), one
            'spacing' => 'one',
        ],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => null,
        ],
        // 空行换行必须在任何已配置的语句之前
        'blank_line_before_statement' => [
            // (赋值数组)
            'statements' => [
                'declare',
            ],
        ],
        // 在 phpdoc 中应该忽略的注解
        'general_phpdoc_annotation_remove' => [
            'annotations' => [
                'author',
            ],
        ],
        'ordered_imports' => [
            'imports_order' => [
                'class', 'function', 'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        // 只有一行实际内容的单行注释和多行注释应使用//语法。
        'single_line_comment_style' => [
            'comment_types' => [
            ],
        ],
        'yoda_style' => [
            'always_move_variable' => false,
            'equal' => false,
            'identical' => false,
        ],
        // 给定 phpdoc 标签的所有项目必须左对齐或（默认情况下）垂直对齐。
        'phpdoc_align' => [
            'align' => 'left',
        ],
        // 在结束分号之前禁止多行空格或将分号移动到链接调用的新行
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'constant_case' => [
            'case' => 'lower',
        ],
        // Class, trait 和 interface 的属性是否需要一个空行隔开
        'class_attributes_separation' => true,
        // 当多个 unset 使用的时候，合并处理
        'combine_consecutive_unsets' => true,
        // Force strict types declaration in all files. Requires PHP >= 7.0.
        'declare_strict_types' => true,
        // 在<?php 标签所在的行不允许存在代码
        'linebreak_after_opening_tag' => true,
        // 静态调用必须小写,例如
        'lowercase_static_reference' => true,
        // 不需要没有用的 else 分支
        'no_useless_else' => true,
        // 引入 use 后但是没有用到的类要删除
        'no_unused_imports' => true,
        // 逻辑 NOT 运算符（!）应该有一个尾随空格
        'not_operator_with_successor_space' => true,
        // 辑 NOT 运算符（!）应该具有前导和尾随空格
        'not_operator_with_space' => false,
        'ordered_class_elements' => true,
        'php_unit_strict' => false,
        // PHPDoc 中的注释应该组合在一起，以便相同类型的注释紧跟在一起，并且不同类型的注释由单个空行分隔
        'phpdoc_separation' => false,
        'single_quote' => true,
        'standardize_not_equals' => true,
        // DocBlocks 必须以两个星号开头，多行注释必须以单个星号开头，在开头的斜线后面。两者必须在结束斜杠之前以单个星号结尾
        'multiline_comment_opening_closing' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('public')
            ->exclude('runtime')
            ->exclude('vendor')
            ->in(__DIR__)
    )
    ->setUsingCache(false);
