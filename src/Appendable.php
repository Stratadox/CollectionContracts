<?php

namespace Stratadox\Collection;

interface Appendable extends Collection
{
    /**
     * Add one or more values to the collection.
     *
     * @param array ...$newItems    The items to add.
     * @return Appendable|static    The calling instance or an altered copy.
     */
    public function add(...$newItems) : Appendable;

    /**
     * Merge the values of another collection into this one.
     *
     * @param Collection $withAnotherCollection The collection to merge in.
     * @return Appendable|static                The calling instance or an altered copy.
     */
    public function merge(Collection $withAnotherCollection) : Appendable;
}
