<?php

namespace Stratadox\Collection;

interface Uniquifiable extends Collection
{
    /**
     * Returns a copy of the collection with all duplicates removed.
     *
     * @return self|static The calling instance or an altered copy.
     */
    public function unique(): self;
}
