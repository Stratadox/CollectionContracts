<?php

namespace Stratadox\Collection;

interface Mergeable extends Collection
{
    /**
     * Merge the values of another collection into this one.
     *
     * @param Collection $withAnotherCollection The collection to merge in.
     * @return static                           The calling instance or an altered copy.
     */
    public function merge(Collection $withAnotherCollection);
}
