<?php

namespace Stratadox\Collection;

interface Reversible
{
    /**
     * Reverses the order of the elements in the collection.
     *
     * @return Reversible|static The calling instance or an altered copy.
     */
    public function reverse() : Reversible;
}
