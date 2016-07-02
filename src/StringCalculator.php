<?php

/**
 * Class StringCalculator
 */
class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    /**
     * @param $numbers
     * @return int
     */
    public function add($numbers)
    {
        $numbers = $this->prepareNumbersForSum($numbers);
        $result = 0;

        foreach ($numbers as $number)
        {

            $this->checkIsValidNumber($number);
            if ($number >= self::MAX_NUMBER_ALLOWED) continue;

            $result += $number;
        }

        return (int) $result;
    }

    /**
     * @param $number
     */
    private function invalidNumberFound($number)
    {
        throw new InvalidArgumentException($number . ' is negative and negative numbers are not allowed');
    }

    /**
     * @param $numbers
     * @return array
     */
    private function prepareNumbersForSum($numbers)
    {
        $numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);
        return $numbers;
    }

    /**
     * @param $number
     */
    private function checkIsValidNumber($number)
    {
        if ($number < 0) throw new InvalidArgumentException($number . ' is negative and negative numbers are not allowed');
    }
}
