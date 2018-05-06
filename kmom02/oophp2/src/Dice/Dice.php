<?php

namespace Dalf14\Dice;

class Dice
{
    private $rollTimes;
    private $lastRoll;

    public function __construct($rollTimes = 6) 
    {
        $this->rollTimes = $rollTimes;
    }

    public function roll() 
    {
        $nrs = [];
        for ($i=0; $i < $this->rollTimes; $i++) { 
            $nrs[$i] = rand(1, 6);
        }
        return $nrs;
    }

    public function singleRoll() 
    {
        $this->lastRoll = rand(1, 6);
        return $this->lastRoll;
    }

    public function getLastSingleRoll() 
    {
        return $this->lastRoll;
    }
}
