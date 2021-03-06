<?php

namespace Stratadox\Collection;

interface Rotatable extends Collection
{
    /**
     * Rotates the items in the collection by moving each element n places,
     * moving overflowing items to the front.
     *
     * @param int $distance Move the items by this many places.
     * @return static       The calling instance or an altered copy.
     */
    public function rotate(int $distance);
}
