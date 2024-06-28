<?php

namespace Abdulmajidcse\CodeMask;

class CodeMask
{
    /**
     * Hide string
     * 
     * @param string $string
     * @param int $visibleInStart
     * @param int $visibleInEnd
     * @param string $maskString
     * 
     * @return string
     */
    public function hideString(string $string, int $visibleInStart = 1, int $visibleInEnd = 1, string $maskString = '*'): string
    {
        $length = strlen($string);

        $padLength = $length - $visibleInEnd;

        $firstString = substr($string, 0, $visibleInStart);
        $lastString = substr($string, -$visibleInEnd);
        
        return str_pad($firstString, $padLength, $maskString, STR_PAD_RIGHT) . $lastString;
    }

    /**
     * Generate ID
     * 
     * @param string $string
     * @param int $length
     * @param string $padString
     * @param string $prefix
     * 
     * @return string
     */
    public function generateId(string $string, int $length = 10, string $padString = '0', string $prefix = ''): string
    {
        return $prefix . str_pad($string, $length, $padString, STR_PAD_LEFT);
    }
}
