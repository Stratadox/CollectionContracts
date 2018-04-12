<?php

namespace Stratadox\Collection;

use Closure;
use Stratadox\Specification\Contract\Satisfiable;

interface Filterable extends Collection
{
    /**
     * Filters the collection using a specification.
     *
     * @param Satisfiable $condition The condition that has to be satisfied.
     * @return self|static           The calling instance or an altered copy.
     */
    public function that(Satisfiable $condition): self;

    /**
     * Filters the collection using a specification.
     *
     * @param Closure $function The function that checks the elements.
     * @return self|static      The calling instance or an altered copy.
     */
    public function filterWith(Closure $function): self;
}
