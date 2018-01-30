<?php

namespace Stratadox\Collection;

interface Differentiable
{
    /**
     * Yields a collection with all the items of this collection that are not
     * in the other collection.
     *
     * @param Collection[] $others The collection(s) to compare to.
     * @return Differentiable|static The calling instance or an altered copy.
     */
    public function differenceBetween(Collection ...$others) : Differentiable;
}
