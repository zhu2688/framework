<?php
$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('vendor', 'public', 'assets')
    ->in(__DIR__)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);
$fixers = array(
    '@PSR1' => true,
    '@PSR2' => true,
    'include' => true, //include 和文件路径之间需要有一个空格，文件路径不需要用括号括起来;
    'single_quote' => true, //简单字符串应该使用单引号代替双引号;
    'no_unused_imports' => true, //删除没用到的use
    'no_useless_else' => true, //删除无用的else
    'no_useless_return' => true, //删除不用的return
    'no_singleline_whitespace_before_semicolons' => true, //禁止只有单行空格和分号的写法;
    'binary_operator_spaces' => true, //二进制操作符两端至少有一个空格;
    'no_empty_statement' => true, //多余的分号
    'no_empty_comment' => true, //删除空白行的注释
    'no_extra_consecutive_blank_lines' => true, //多余空白行
    'no_whitespace_in_blank_line' => true, //删除空白行最后多余的空格
    'no_blank_lines_after_class_opening' => true, //类开始标签后不应该有空白行;
    'no_trailing_comma_in_list_call' => true, //删除 list 语句中多余的逗号;
    'no_leading_namespace_whitespace' => true, //命名空间前面不应该有空格;
    'standardize_not_equals' => true, //使用 <> 代替 !=;
    'no_trailing_comma_in_singleline_array' => true, //去掉单行数组最后一个元素的空格
    'lowercase_cast' => true,
    'no_extra_blank_lines' => ['tokens' => ['break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block']],
    'short_scalar_cast' => true, //boolean -> bool integer->int
    // 'cast_spaces' => true, //变量和修饰符之间应该有一个空格
    // 'trim_array_spaces' => true, //数组去空格
    // 'lowercase_constants' => true, // PHP constants true, false, and null 必须小写 true false,null 小写
    // 'no_whitespace_before_comma_in_array' => true, //数组之间的每个元素需要加个空格
    'whitespace_after_comma_in_array' => true,
    // 'blank_line_before_statement' => false //'break', 'continue', 'declare', 'return', 'throw', 'try' 结构返回前必须加一空行
   );
return PhpCsFixer\Config::create()
    ->setRules($fixers)
    ->setFinder($finder)
    ->setUsingCache(false);
