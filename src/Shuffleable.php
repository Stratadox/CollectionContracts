<?php

namespace Stratadox\Collection;

interface Shuffleable
{
    /**
     * Shuffles the values in the collection.
     *
     * @return Shuffleable|static The calling instance or an altered copy.
     */
    public function shuffle() : Shuffleable;

    /**
     * Picks a random item from the collection.
     *
     * @return mixed|object The item from the collection.
     */
    public function oneAtRandom() : Shuffleable;
}
