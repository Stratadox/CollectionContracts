<?php

namespace Stratadox\Collection;

use Stratadox\Specification\Contract\Satisfiable;

interface Filterable extends Collection
{
    /**
     * Filters the collection using a specification.
     *
     * @param Satisfiable $condition    The condition that has to be satisfied.
     * @return Filterable|static        The calling instance or an altered copy.
     */
    public function that(Satisfiable $condition) : Filterable;
}