<?php

namespace Stratadox\Collection;

use Closure;

interface Mappable extends Collection
{
    /**
     * Applies the function to each of the elements, putting back the result.
     *
     * @param Closure $function The function used for mapping the collection.
     * @return static           The calling instance or an altered copy.
     */
    public function map(Closure $function);
}
