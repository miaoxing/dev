<?php

function build_suc($message, $args = null, $args2 = null)
{
    $message = format(func_get_args());
    echo $message . \PHP_EOL;

    return '';
}

/**
 * @SuppressWarnings(PHPMD)
 * @param mixed $message
 * @param mixed|null $args
 * @param mixed|null $args2
 */
function build_err($message, $args = null, $args2 = null)
{
    $message = format(func_get_args());
    echo $message . \PHP_EOL;

    $dir = 'reports';
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    $content = $message . str_repeat(\PHP_EOL, 2) . str_repeat('=', 70);

    // 根据运行的脚本名生成错误文件名
    file_put_contents($dir . '/' . basename($_SERVER['SCRIPT_NAME'], '.php') . '.txt', $content, \FILE_APPEND);

    return '';
}

function format($args)
{
    $message = $args[0];
    if (isset($args[1])) {
        array_shift($args);
        $message = vsprintf($message, $args);
    }

    return \PHP_EOL . $message . \PHP_EOL;
}

function getTables()
{
    return wei()->db->selectAll('information_schema.tables', [
        'TABLE_TYPE' => 'BASE TABLE',
        'TABLE_SCHEMA' => wei()->db->getDbname(),
    ], 'TABLE_NAME');
}

function init()
{
    $dirs = [
        '.',
        'plugins/plugin',
    ];
    foreach ($dirs as $dir) {
        if (is_file($dir . '/tests/init.php')) {
            require $dir . '/tests/init.php';
        }
    }

    return wei();
}
