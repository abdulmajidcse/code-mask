<?php

use PHPUnit\Framework\TestCase;
use Abdulmajidcse\CodeMask\CodeMask;

class CodeMaskTest extends TestCase
{
    protected CodeMask $codeMask;

    protected function setUp(): void
    {
        $this->codeMask = new CodeMask();
    }

    public function testHiddenString()
    {
        $phoneNumber = "1234567890";
        $hiddenPhoneNumber = $this->codeMask->hiddenString($phoneNumber, 2, 2);
        $this->assertEquals('12******90', $hiddenPhoneNumber);
    }

    public function testGenerateSerial()
    {
        $serial = $this->codeMask->generateSerial(123, 10, 0, '2701');
        $this->assertEquals('27010000000123', $serial);
    }
}
