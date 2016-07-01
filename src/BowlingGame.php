<?php

class BowlingGame
{
    protected $result = 0;

    public function roll($hits)
    {
        $this->result += $hits;
    }

    public function getResult()
    {
        return $this->result;
    }
}
