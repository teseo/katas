<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RomanNumeralsConverter');
    }

    function it_should_return_I_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }
    function it_should_return_I_I_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }
    function it_should_return_I_I_I_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }
    function it_should_return_I_I_I_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }
    function it_should_return_V_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }
    function it_should_return_VI_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }
    function it_should_return_IX_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    function it_should_return_X_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }
    function it_should_return_XV_for_15()
    {
        $this->convert(15)->shouldReturn('XV');
    }
    function it_should_return_XVII_for_17()
    {
        $this->convert(17)->shouldReturn('XVII');
    }
    function it_should_return_L_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }
    function it_should_return_C_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }
    function it_should_return_D_for_500()
    {
        $this->convert(500)->shouldReturn('D');
    }
    function it_should_return_M_for_1000()
    {
        $this->convert(1000)->shouldReturn('M');
    }
    function it_should_return_MII_for_1002()
    {
        $this->convert(1002)->shouldReturn('MII');
    }
    function it_should_return_MCMLXXXII_for_1982()
    {
        $this->convert(1982)->shouldReturn('MCMLXXXII');
    }
    function it_should_return_MCMLXXXII_for_1999()
    {
        $this->convert(1999)->shouldReturn('MCMXCIX');
    }
    function it_should_return_MCCCVIII_for_1308()
    {
        $this->convert(1308)->shouldReturn('MCCCVIII');
    }
    function it_should_return_MMMMCMXC_for_4990()
    {
        $this->convert(4990)->shouldReturn('MMMMCMXC');
    }
}