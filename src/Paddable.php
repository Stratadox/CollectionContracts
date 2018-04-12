<?php

namespace Stratadox\Collection;

interface Paddable extends Collection
{
    /**
     * Adds values to the beginning of the collection until an amount is reached.
     *
     * @param int   $amount Minimum size of the collection after the operation.
     * @param mixed $value  The value to pad with; must be compatible.
     * @return self|static  The calling instance or an altered copy.
     */
    public function padLeft(int $amount, $value): self;

    /**
     * Adds values to the end of the collection until an amount is reached.
     *
     * @param int   $amount Minimum size of the collection after the operation.
     * @param mixed $value  The value to pad with; must be compatible.
     * @return self|static  The calling instance or an altered copy.
     */
    public function padRight(int $amount, $value): self;
}
