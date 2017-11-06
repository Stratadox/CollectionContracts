<?php

namespace Stratadox\Collection;

use ArrayAccess;
use Countable;
use Traversable;

interface Collection extends ArrayAccess, Countable, Traversable
{
    /**
     * Yields an array copy of the collection.
     *
     * @return array
     */
    public function items() : array;
}
