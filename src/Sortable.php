<?php

namespace Stratadox\Collection;

interface Sortable
{
    /**
     * Sorts the values in the collection.
     *
     * @return Sortable|static The calling instance or an altered copy.
     */
    public function sort() : Sortable;
}
