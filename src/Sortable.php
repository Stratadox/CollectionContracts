<?php

namespace Stratadox\Collection;

use Closure;
use Stratadox\Sorting\Contracts\DefinesHowToSort;

interface Sortable extends Collection
{
    /**
     * Sorts the values in the collection.
     *
     * @param Closure|null $function Optional function to decide on the order.
     *                               Takes two items and returns -1, 0 or 1.
     * @return self|static           The calling instance or an altered copy.
     */
    public function sort(Closure $function = null): self;

    /**
     * Reorders the collection based on a sorting definition.
     *
     * @param DefinesHowToSort $sort The definition on how to sort.
     * @return Sortable              The calling instance or an altered copy.
     */
    public function reorder(DefinesHowToSort $sort): self;
}
