<?php

namespace Abdulmajidcse\CodeMask;

class CodeMask
{
    /**
     * Generate hidden phone number
     * 
     * @param string $phoneNumber
     * @param int $visibleStartDigits
     * @param int $visibleEndDigits
     * 
     * @return string
     */
    public function hidePhoneNumber(string $phoneNumber, int $visibleStartDigits = 1, int $visibleEndDigits = 1): string
    {
        $length = strlen($phoneNumber);

        if ($length <= $visibleStartDigits + $visibleEndDigits) {
            // do not need to hide phone number
            return $phoneNumber;
        }

        $firstDigits = substr($phoneNumber, 0, $visibleStartDigits);
        $lastDigits = substr($phoneNumber, -$visibleEndDigits);
        $middlePortion = str_repeat('*', $length - $visibleStartDigits - $visibleEndDigits);

        return $firstDigits . $middlePortion . $lastDigits;
    }
}
