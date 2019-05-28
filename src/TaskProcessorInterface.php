<?php
declare(strict_types=1);

namespace Psr\EventDispatcher;

/**
 * Defines a processor for task events.
 */
interface TaskProcessorInterface
{
    /**
     * Provide all listeners with a task event to process.
     *
     * @param TaskInterface $event
     *  The task to process.
     *
     * @return TaskInterface
     *  The task that was passed, now modified by callers.
     */
    public function process(TaskInterface $event) : TaskInterface;
}
