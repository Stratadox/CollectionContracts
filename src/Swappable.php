<?php

namespace Stratadox\Collection;

interface Swappable
{
    /**
     * Swaps the positions of two values in the collection.
     *
     * @param int $position
     * @param int $withTheOtherPosition
     * @return self|static The calling instance or an altered copy.
     */
    public function swap(int $position, int $withTheOtherPosition) : Swappable;
}
