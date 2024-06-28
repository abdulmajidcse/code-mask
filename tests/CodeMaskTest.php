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

    public function testHideString()
    {
        $phoneNumber = "1234567890";
        $hidePhoneNumber = $this->codeMask->hideString($phoneNumber, 2, 2);
        $this->assertEquals('12******90', $hidePhoneNumber);
    }

    public function testGenerateId()
    {
        $id = $this->codeMask->generateId(123, 10, 0, '2701');
        $this->assertSame('27010000000123', $id);
    }
}
