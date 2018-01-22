<?php

namespace spec\Acme;

use Acme\Player;
use Acme\Tennis;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{
    protected $jane;
    protected $john;

    protected $scores = [
        [1, 2, 'Fifteen-Thirty']
    ];

    function let()
    {
        $this->jane = new Player('Jane', 0);
        $this->john = new Player('John', 0);

        $this->beConstructedWith($this->jane, $this->john);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Tennis');
    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_a_1_0_game()
    {
        $this->jane->earnPoints(1);

        $this->score()->shouldReturn('Fifteen-Love');
    }

    function it_scores_a_2_0_game()
    {
        $this->jane->earnPoints(2);

        $this->score()->shouldReturn('Thirty-Love');
    }

    function it_scores_a_3_0_game()
    {
        $this->jane->earnPoints(3);

        $this->score()->shouldReturn('Forty-Love');
    }

    function it_scores_a_4_0_game()
    {
        $this->jane->earnPoints(4);

        $this->score()->shouldReturn('Win for Jane');
    }

    function it_scores_a_0_4_game()
    {
        $this->john->earnPoints(4);

        $this->score()->shouldReturn('Win for John');
    }

    function it_scores_a_4_3_game()
    {
        $this->jane->earnPoints(4);
        $this->john->earnPoints(3);

        $this->score()->shouldReturn('Advantage for Jane');
    }

    function it_scores_a_3_3_game()
    {
        $this->jane->earnPoints(3);
        $this->john->earnPoints(3);

        $this->score()->shouldReturn('Deuce');
    }

    function it_scores_a_4_4_game()
    {
        $this->jane->earnPoints(4);
        $this->john->earnPoints(4);

        $this->score()->shouldReturn('Deuce');
    }

    function it_scores_a_5_3_game()
    {
        $this->jane->earnPoints(5);
        $this->john->earnPoints(3);

        $this->score()->shouldReturn('Win for Jane');
    }

}
