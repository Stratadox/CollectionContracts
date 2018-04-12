<?php

namespace Stratadox\Collection;

use Closure;

interface Executable extends Collection
{
    /**
     * Has each item in the collection execute the function.
     *
     * The closure will be called with parameters (int $position, mixed $item)
     * Concrete collection implementations should bind the closure to the item,
     * if the item is an object.
     *
     * @param Closure $function The function to execute.
     */
    public function execute(Closure $function): void;
}
