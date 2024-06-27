<?php

namespace Abdulmajidcse\CodeMask;

class CodeMask
{
    /**
     * Generate hidden string
     * 
     * @param string $string
     * @param int $visibleInStart
     * @param int $visibleInEnd
     * @param string $hiddenString
     * 
     * @return string
     */
    public function hiddenString(string $string, int $visibleInStart = 1, int $visibleInEnd = 1, string $hiddenString = '*'): string
    {
        $length = strlen($string);

        $padLength = $length - $visibleInEnd;

        $firstString = substr($string, 0, $visibleInStart);
        $lastString = substr($string, -$visibleInEnd);
        
        return str_pad($firstString, $padLength, $hiddenString, STR_PAD_RIGHT) . $lastString;
    }

    /**
     * Generate formatted serial
     * 
     * @param string $string
     * @param int $length
     * @param string $padString
     * @param string $prefix
     * 
     * @return string
     */
    public function generateSerial(string $string, int $length = 10, string $padString = '0', string $prefix = ''): string
    {
        return $prefix . str_pad($string, $length, $padString, STR_PAD_LEFT);
    }
}
