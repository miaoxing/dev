<?php

namespace MiaoxingTest\Sniffs\Rest;

use MiaoxingTest\Sniffs\BaseTestCase;

class ActionNamingSniffTest extends BaseTestCase
{
    public function testSniff()
    {
        $fixtureFile = __DIR__ . '/ActionNamingSniffFixture.php';
        $sniffFile = __DIR__ . '/../../../Miaoxing/Sniffs/Rest/ActionNamingSniff.php';

        $phpcsFile = $this->process($fixtureFile, $sniffFile);

        $foundErrors = $phpcsFile->getErrors();
        $this->assertSame([7, 15, 19, 23, 27, 35, 43, 47, 51], array_keys($foundErrors));
    }
}
