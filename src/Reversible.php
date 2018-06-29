<?php

namespace Stratadox\Collection;

interface Reversible extends Collection
{
    /**
     * Reverses the order of the elements in the collection.
     *
     * @return static The calling instance or an altered copy.
     */
    public function reverse();
}
