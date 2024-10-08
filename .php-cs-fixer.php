<?php

$cwd = getcwd();

$ignoreDirs = [
    'vendor',
    'node_modules',
    'plugins',
    // 忽略生成的缓存文件
    'storage/cache',
];

$config = (new PhpCsFixer\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in('.')
            ->exclude($ignoreDirs)
            // 忽略 GAutoCompletion 生成的文件
            ->notName('/^auto-completion/')
    )
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRules([
        '@PSR12' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'single_line_comment_style' => [
            // 允许 /* @see xxx */
            'comment_types' => ['hash'],
        ],
        'multiline_whitespace_before_semicolons' => false,
        // 会导致返回指针错误，暂时不要
        'return_assignment' => false,
        // 拆散代码逻辑
        'no_superfluous_elseif' => false,
        // 同上
        'no_useless_else' => false,
        // 同上
        'blank_line_before_statement' => false,
        // 暂时需要，保证文档一致
        'no_superfluous_phpdoc_tags' => false,
        // 会导致中文加入半角句号
        'phpdoc_summary' => false,
        // 和 PhpStorm 默认自动生成不一致
        'phpdoc_align' => false,
        'phpdoc_separation' => false,
        'phpdoc_order' => false,
        'phpdoc_no_empty_return' => false,
        'phpdoc_var_annotation_correct_order' => false,
        'phpdoc_to_comment' => false,
        // https://youtrack.jetbrains.com/issue/WI-36662
        'array_indentation' => false,
        // 破坏语义
        'phpdoc_no_alias_tag' => false,
        // 代码高亮可以清楚展示出来
        'explicit_string_variable' => false,
        // 会将 Test 结尾的类都加上 @internal
        'php_unit_internal_class' => false,
        'php_unit_test_class_requires_covers' => false,
        'php_unit_test_case_static_method_calls' => false,
        // 视图变量中允许没有;
        'semicolon_after_instruction' => false,
        // 参数过长需换行
        'single_line_throw' => false,
        // 视图中可使用短标签输出
        'echo_tag_syntax' => false,
        // 与 phpcs 的 PSR12.Classes.AnonClassDeclaration.SpaceAfterKeyword 冲突
        'class_definition' => false,
        // Class\n::method([\n"key" => "value"\n])\n->method2() 缩进不正确
        'method_chaining_indentation' => false,

        // https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/issues/7179
        'statement_indentation' => false,

        // Risky
        'php_unit_strict' => false,
        'php_unit_data_provider_return_type' => false,
        'php_unit_data_provider_name' => false,

        'strict_comparison' => false,
        'native_function_invocation' => false,
        // 可能导致 __unset 方法不能如期调用
        'no_unset_on_property' => false,
        // 自行按需加上即可
        'final_internal_class' => false,

        // 过于先进，编辑器还未支持
        'single_line_empty_body' => false,

        // require PHP 8.0
        'modernize_strpos' => false,
        'get_class_to_class_keyword' => false,
    ]);

return $config;