<?php

namespace Stratadox\Collection;

interface Sliceable extends Collection
{
    /**
     * Takes a slice from the collection.
     *
     * @param int $size   The size of the slice to take.
     * @param int $offset The position at which to start slicing.
     * @return static     The calling instance or an altered copy.
     */
    public function slice(int $size, int $offset = 0);
}
