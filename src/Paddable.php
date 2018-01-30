<?php

namespace Stratadox\Collection;

interface Paddable
{
    /**
     * Adds values to the beginning of the collection until an amount is reached.
     *
     * @param int $amount   Minimum size of the collection after the operation.
     * @param mixed $value  The value to pad with; must be compatible.
     * @return Paddable|static
     */
    public function padLeft(int $amount, $value) : Paddable;

    /**
     * Adds values to the end of the collection until an amount is reached.
     *
     * @param int $amount   Minimum size of the collection after the operation.
     * @param mixed $value  The value to pad with; must be compatible.
     * @return Paddable|static
     */
    public function padRight(int $amount, $value) : Paddable;
}
