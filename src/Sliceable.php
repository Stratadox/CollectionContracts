<?php

namespace Stratadox\Collection;

interface Sliceable
{
    /**
     * Takes a slice from the collection.
     *
     * @param int $size
     * @param int $offset
     * @return Sliceable|static The calling instance or an altered copy.
     */
    public function slice(int $size, int $offset = 0) : Sliceable;
}
