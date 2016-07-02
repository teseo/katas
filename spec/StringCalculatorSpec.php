<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('StringCalculator');
    }

    function it_translates_an_empty_string_to_zero()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_should_find_the_sum_of_two_numbers()
    {
        $this->add('1,2')->shouldEqual(3);
    }
    function it_should_find_the_sum_of_any_amount_of_numbers()
    {
        $this->add('1,2,3,4,5')->shouldEqual(15);
    }
    function it_disallows_negative_numbers()
    {
        $this->shouldThrow(new \InvalidArgumentException('-2 is negative and negative numbers are not allowed'))
            ->duringAdd('3,-2');
    }
    function it_ignores_any_number_that_is_one_thousand_or_greater()
    {
        $this->add('1,2,1000,4,5000,8')->shouldEqual(15);
    }
    function it_allows_for_new_lines_delimeters()
    {
        $this->add('1,2\n2,5')->shouldEqual(10);
    }

}
