<?php

/**
 * Class PrimeFactors
 */
class PrimeFactors
{
    /**
     * @param $number
     * @return array
     */
    public function parse($number)
    {
        $result = [];

        if (is_null($number)  || $number === 0)  return $result;

        if ($number === 1) return [1];

        for ($candidate = 2; $candidate <= $number; $candidate++)
        {
            for (; $number % $candidate === 0 ; $number = $number / $candidate)
            {
                $result[] = $candidate;

            }
        }
        return $result;
    }
}
 