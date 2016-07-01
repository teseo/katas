<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BowlingGame');
    }

    function it_returns_0_points_for_failing_10_frames()
    {
        for ($i = 1; $i<=20; $i++)
        {
           $this->roll(0);
        }
        $this->getResult()->shouldReturn(0);
    }
    function it_returns_6_points_by_hitting_pins_in_1_frame()
    {
       $this->roll(2);
       $this->roll(4);
        for ($i = 1; $i<=18; $i++)
        {
           $this->roll(0);
        }
        $this->getResult()->shouldReturn(6);
    }

}
