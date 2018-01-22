<?php

namespace spec;

use AcmeFizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AcmeFizzBuzzSpec extends ObjectBehavior
{

    function it_translates_1_for_fizzbuzz()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_translates_2_for_fizzbuzz()
    {
        $this->execute(2)->shouldReturn(2);
    }

    function it_translates_3_for_fizzbuzz()
    {
        $this->execute(3)->shouldReturn('fizz');
    }

    function it_translates_4_for_fizzbuzz()
    {
        $this->execute(4)->shouldReturn(4);
    }

    function it_translates_5_for_fizzbuzz()
    {
        $this->execute(5)->shouldReturn('buzz');
    }

    function it_translates_6_for_fizzbuzz()
    {
        $this->execute(6)->shouldReturn('fizz');
    }

    function it_translates_7_for_fizzbuzz()
    {
        $this->execute(7)->shouldReturn(7);
    }

    function it_translates_8_for_fizzbuzz()
    {
        $this->execute(8)->shouldReturn(8);
    }

    function it_translates_9_for_fizzbuzz()
    {
        $this->execute(9)->shouldReturn('fizz');
    }

    function it_translates_10_for_fizzbuzz()
    {
        $this->execute(10)->shouldReturn('buzz');
    }

    function it_translates_15_for_fizzbuzz()
    {
        $this->execute(15)->shouldReturn('fizzbuzz');
    }

    function it_translates_100_for_fizzbuzz()
    {
        $this->execute(100)->shouldReturn('buzz');
    }

    function it_translates_a_sequence_of_numbers_up_to_5_for_fizzbuzz()
    {
        $this->executeUpTo(5)->shouldReturn([1,2, 'fizz', 4, 'buzz']);
    }

    function it_translates_a_sequence_of_numbers_up_to_10_for_fizzbuzz()
    {
        $this->executeUpTo(10)->shouldReturn([1,2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz']);
    }

}
