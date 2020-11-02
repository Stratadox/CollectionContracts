<?php

namespace Stratadox\Collection;

use Closure;

interface Mappable extends Collection
{
    /**
     * Applies the function to each of the elements, returning an array of
     * mapped results.
     *
     * @param Closure $function The function used for mapping the collection.
     * @return array
     */
    public function map(Closure $function): array;
}
