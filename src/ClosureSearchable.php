<?php

namespace Stratadox\Collection;

use Closure;

interface ClosureSearchable extends Collection
{
    /**
     * Finds the first item for which the closure returns true.
     *
     * @param Closure $function Function that takes an item and returns boolean.
     * @return mixed            One of the items in the collection.
     */
    public function findOneWith(Closure $function);

    /**
     * Checks if there is an item in the collection for which the closure
     * returns true.
     *
     * @param Closure $function Function that takes an item and returns boolean.
     * @return bool             Whether there is at least one item in the
     *                          collection for which the function returns true.
     */
    public function checkWith(Closure $function): bool;
}
