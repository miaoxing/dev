<?php

$vendorDir = __DIR__ . '/../vendor';

if (!is_dir($vendorDir)) {
    // Running in packages/miaoxing-dev
    $vendorDir = __DIR__ . '/../../../vendor';
}

/** @var Composer\Autoload\ClassLoader $loader */
$loader = require $vendorDir . '/autoload.php';
$loader->addPsr4('MiaoxingTest\Sniffs\\', __DIR__ . '/Sniffs');
$loader->addPsr4('WordPressCS\\', $vendorDir . '/wp-coding-standards/wpcs');

$compatFile = $vendorDir . '/nikic/php-parser/lib/PhpParser/compatibility_tokens.php';
if (is_file($compatFile)) {
    require_once $compatFile;
}

require_once $vendorDir . '/squizlabs/php_codesniffer/autoload.php';
require_once $vendorDir . '/squizlabs/php_codesniffer/tests/bootstrap.php';
