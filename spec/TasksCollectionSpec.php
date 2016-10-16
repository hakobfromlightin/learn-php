<?php

namespace spec\App;

use App\Task;
use App\TasksCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TasksCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TasksCollection::class);
    }

    function it_stores_a_collection_of_tasks(Task $task)
    {
        $this->add($task);

        $this->shouldHaveCount(1);
    }

    function it_can_accept_multiple_tasks_to_add_at_once(Task $task1, Task $task2)
    {
        $this->add([$task1, $task2]);

        $this->shouldHaveCount(2);
    }

    function it_can_mark_all_tasks_as_completed(Task $task1, Task $task2)
    {
        $task1->complete()->shouldBeCalled();
        $task1->complete()->shouldBeCalled();

        $this->add([$task1, $task2]);

        $this->markAllAsCompleted();
    }
}
