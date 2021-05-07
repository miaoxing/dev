<?php

namespace MiaoxingTest\Sniffs\Wording;

use MiaoxingTest\Sniffs\BaseTestCase;

class InconsistentNameSniffTest extends BaseTestCase
{
    public function testSniff()
    {
        $fixtureFile = __DIR__ . '/InconsistentNameSniffFixture.php';
        $sniffFile = __DIR__ . '/../../../Miaoxing/Sniffs/Wording/InconsistentNameSniff.php';

        $phpcsFile = $this->process($fixtureFile, $sniffFile);

        $foundErrors = $phpcsFile->getErrors();
        $this->assertSame([4, 6, 8, 11], array_keys($foundErrors));
    }
}
