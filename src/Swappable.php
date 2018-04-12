<?php

namespace Stratadox\Collection;

interface Swappable extends Collection
{
    /**
     * Swaps the positions of two values in the collection.
     *
     * @param int $position             Changes the item at this location...
     * @param int $withTheOtherPosition ...with the item at this location.
     * @return self|static              The calling instance or an altered copy.
     */
    public function swap(int $position, int $withTheOtherPosition) : self;
}
