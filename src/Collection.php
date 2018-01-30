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
     * @return array
     */
    public function items() : array;
}
