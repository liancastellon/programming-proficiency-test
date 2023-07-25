<?php

namespace App;

class ArabicToRoman
{
    private static $LETTER_MAP = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    /**
     * Receive an arabic number and return a string with its roman counterpart
     *
     * @param int $arabicNumber Arabic number to be transformed (e.g. 121)
     * @return string The roman number equivalent (e.g. CXXI)
     */
    public static function transform( int $arabicNumber): string
    {
        $result = '';

        foreach (self::$LETTER_MAP as $value => $letter) {
            while ($arabicNumber >= $value) {
                $result .= $letter;
                $arabicNumber -= $value;
            }
        }

        return $result;
    }
}
