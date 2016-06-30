<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PrimeFactors');
    }

    function it_returns_empty_for_null()
    {
        $this->parse(null)->shouldReturn([]);
    }
    function it_returns_empty_for_zero()
    {
        $this->parse(0)->shouldReturn([]);
    }
    function it_returns_1_for_1()
    {
        $this->parse(1)->shouldReturn([1]);
    }
    function it_returns_2_for_2()
    {
        $this->parse(2)->shouldReturn([2]);
    }
    function it_returns_3_for_3()
    {
        $this->parse(3)->shouldReturn([3]);
    }
    function it_returns_2_2_for_4()
    {
        $this->parse(4)->shouldReturn([2,2]);
    }
    function it_returns_2_3_for_6()
    {
        $this->parse(6)->shouldReturn([2,3]);
    }
    function it_returns_3_3_for_9()
    {
        $this->parse(9)->shouldReturn([3,3]);
    }
    function it_returns_2_2_3_for_12()
    {
        $this->parse(12)->shouldReturn([2,2,3]);
    }
    function it_returns_2_2_13_for_52()
    {
        $this->parse(52)->shouldReturn([2,2,13]);
    }
    function it_returns_2_2_2_17_for_136()
    {
        $this->parse(136)->shouldReturn([2,2,2,17]);
    }
}
