<?php

namespace Stratadox\Collection;

use ArrayAccess;
use Countable;
use Iterator;

interface Collection extends ArrayAccess, Countable, Iterator
{
    /**
     * Yields an array copy of the collection.
     *
     * @return array An array representation of the items in the collection.
     */
    public function items(): array;
}
