<?php

namespace Stratadox\Collection;

interface Shuffleable extends Collection
{
    /**
     * Shuffles the values in the collection.
     *
     * @return static The calling instance or an altered copy.
     */
    public function shuffle();

    /**
     * Picks a random item from the collection.
     *
     * @return mixed|object The item from the collection.
     */
    public function oneAtRandom();
}
