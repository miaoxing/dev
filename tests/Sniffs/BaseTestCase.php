<?php

namespace MiaoxingTest\Sniffs;

use PHP_CodeSniffer\Config;
use PHP_CodeSniffer\Files\LocalFile;
use PHP_CodeSniffer\Ruleset;
use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    public function process(string $fixtureFile, string $sniffFile): LocalFile
    {
        $config = new Config();
        $ruleset = new Ruleset($config);
        $ruleset->registerSniffs([$sniffFile], [], []);
        $ruleset->populateTokenListeners();
        $phpcsFile = new LocalFile($fixtureFile, $ruleset, $config);
        $phpcsFile->process();
        return $phpcsFile;
    }
}
