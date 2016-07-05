<?php

/**
 * Class BowlingGame
 */
class BowlingGame
{
    /**
     * @var array
     */
    protected $plays = [];
    /**
     * @var int
     */
    protected $result = 0;

    const IS_SPARE = 10;
    const IS_STRIKE= 10;
    const MAX_ALLOWED_PLAYS = 20;
    const MAX_ALLOWED_FRAMES_WITH_NO_BONUS = 10;

    /**
     * @param int $hits
     */
    public function roll(int $hits)
    {
        $this->plays[] = $hits;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        for ($i = 0; $i < self::MAX_ALLOWED_FRAMES_WITH_NO_BONUS; $i+=2)
        {
            if ($this->isStrike($i))
            {
                $this->result+= $this->plays[$i]  + $this->plays[$i + 1] + $this->plays[$i + 2];
                $i--;
            }
            else
            {
                $this->result+= $this->plays[$i] + $this->plays[$i + 1];

                if($this->isSpare($i)){
                    $this->result += $this->plays[$i + 2];
                }
            }
        }

        return $this->result;
    }

    /**
     * @param $play
     * @return bool
     */
    private function isSpare($play)
    {
        return $this->plays[$play] + $this->plays[$play + 1] == self::IS_SPARE;
    }

    /**
     * @param $play
     * @return bool
     */
    private function isStrike($play)
    {
        return $this->plays[$play]  == self::IS_STRIKE;
    }
}
