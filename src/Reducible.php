<?php

namespace Stratadox\Collection;

use Closure;

interface Reducible extends Collection
{
    /**
     * Reduces the collection to a single value using a callback function.
     *
     * @param Closure $function The function used for reducing the collection.
     * @param mixed   $initial  The initial value for the reduction.
     * @return mixed            The reduced value.
     */
    public function reduce(Closure $function, $initial = null);
}
