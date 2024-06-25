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

        if ($length <= $visibleInStart + $visibleInEnd) {
            // do not need to hide phone number
            return $string;
        }

        $firstString = substr($string, 0, $visibleInStart);
        $lastString = substr($string, -$visibleInEnd);
        $middlePortion = str_repeat($hiddenString, $length - $visibleInStart - $visibleInEnd);

        return $firstString . $middlePortion . $lastString;
    }
}
