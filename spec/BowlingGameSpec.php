<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class BowlingGameSpec
 * @package spec
 */
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
           $this->performBallLost();
        }
        $this->getResult()->shouldReturn(0);
    }

    function it_returns_6_points_by_hitting_pins_in_1_frame()
    {
       $this->roll(2);
       $this->roll(4);

        for ($i = 1; $i<=18; $i++)
        {
            $this->performBallLost();
        }
        
        $this->getResult()->shouldReturn(6);
    }

    function it_returns_20_points_by_having_a_spare_and_hitting_6_pins_in_the_next_frame()
    {

        $this->performSpare(7,3);

        $this->roll(4);
        $this->roll(2);

        for ($i = 1; $i<=16; $i++)
        {
            $this->performBallLost();
        }

        $this->getResult()->shouldReturn(20);
    }
    function it_returns_28_points_by_having_a_strike_and_hitting_9_pins_in_the_next_frame()
    {
        $this->performStrike();

        $this->roll(4);
        $this->roll(5);

        for ($i = 0; $i<17; $i++)
        {
            $this->performBallLost();
        }

        $this->getResult()->shouldReturn(28);
    }
    function it_returns_300_points_by_having_a_perfect_game()
    {
        for ($i = 0; $i< 12; $i++)
        {
           $this->performStrike();
        }

        $this->getResult()->shouldReturn(300);
    }
    private function performStrike()
    {
        $this->roll(10);
    }
    private function performSpare($ball1, $ball2)
    {
        $this->roll($ball1);
        $this->roll($ball2);
    }
    private function performBallLost()
    {
        $this->roll(0);
    }
}
