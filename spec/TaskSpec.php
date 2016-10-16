<?php

namespace spec\App;

use App\Task;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Test Task');
        $this->shouldHaveType(Task::class);
    }

    function it_can_be_prioritise()
    {
        $this->setPriority(5);

        $this->priority()->shouldEqual(5);
    }

    function its_rating_should_not_exceed_five()
    {
        $this->shouldThrow('InvalidArgumentException')->duringSetPriority(8);
    }

    function it_can_be_marked_as_completed()
    {
        $this->complete();

        $this->shouldBeCompleted();
    }

    function it_can_fetch_the_name_of_the_task()
    {
        $this->name()->shouldBe('Test Task');
    }
}
