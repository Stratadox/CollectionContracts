<?php

namespace Stratadox\Collection;

interface Differentiable extends Collection
{
    /**
     * Yields a collection with all the items of this collection that are not
     * in the other collection.
     *
     * @param Collection[] $others The collection(s) to compare to.
     * @return self|static         The calling instance or an altered copy.
     */
    public function differenceBetween(Collection ...$others) : self;
}
