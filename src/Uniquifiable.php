<?php

namespace Stratadox\Collection;

interface Uniquifiable
{
    /**
     * Returns a copy of the collection with all duplicates removed.
     *
     * @return Uniquifiable|static The calling instance or an altered copy.
     */
    public function unique() : Uniquifiable;
}
