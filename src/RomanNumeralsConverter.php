<?php

/**
 * Class RomanNumeralsConverter
 */
class RomanNumeralsConverter
{
    /**
     * @var array
     */
    protected static $romanNumbersPatterns =
        [
            'M'     => 1000,
            'CM'    => 900,
            'D'     => 500,
            'CD'    => 400,
            'C'     => 100,
            'XC'    => 90,
            'L'     => 50,
            'XL'    => 40,
            'X'     => 10,
            'IX'    => 9,
            'V'     => 5,
            'IV'    => 4,
            'I'     => 1
        ];

    /**
     * @param $number
     * @return string
     */
    public function convert($number)
    {
        $result = '';
        foreach (self::$romanNumbersPatterns as $romanLetter => $value) {
            while ($number >= $value)
            {
                $result = $result . $romanLetter;
                $number = $number - $value;
            }
        }
        return $result;
    }
}