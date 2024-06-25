<?php

use PHPUnit\Framework\TestCase;
use Abdulmajidcse\CodeMask\CodeMask;

class CodeMaskTest extends TestCase
{
    public function testHiddenString()
    {
        $codeMask = new CodeMask();
        $phoneNumber = "1234567890";
        $hiddenPhoneNumber = $codeMask->hiddenString($phoneNumber, 2, 2);

        $this->assertEquals('12******90', $hiddenPhoneNumber);
    }
}
