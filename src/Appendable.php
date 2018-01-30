<?php

namespace Stratadox\Collection;

interface Appendable extends Collection
{
    /**
     * Add one or more values to the collection.
     *
     * @param array ...$newItems The items to add.
     * @return self|static       The calling instance or an altered copy.
     */
    public function add(...$newItems) : self;
}
