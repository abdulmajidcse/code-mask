<?php

use PHPUnit\Framework\TestCase;
use Abdulmajidcse\CodeMask\CodeMask;

class CodeMaskTest extends TestCase
{
    public function testHidePhoneNumber()
    {
        $codeMask = new CodeMask();
        $phoneNumber = "1234567890";
        $hiddenPhoneNumber = $codeMask->hidePhoneNumber($phoneNumber, 2, 2);

        $this->assertEquals('12******90', $hiddenPhoneNumber);
    }
}
