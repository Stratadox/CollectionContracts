<?php

namespace Stratadox\Collection;

interface Shuffleable
{
    /**
     * Shuffles the values in the collection.
     *
     * @return self|static The calling instance or an altered copy.
     */
    public function shuffle() : self;

    /**
     * Picks a random item from the collection.
     *
     * @return mixed|object The item from the collection.
     */
    public function oneAtRandom();
}
