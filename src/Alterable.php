<?php

namespace Stratadox\Collection;

interface Alterable extends Collection
{
    /**
     * Update the index with the new item.
     *
     * @param int   $index   Position to update
     * @param mixed $newItem The item to put there instead
     * @return self|static   The calling instance or an altered copy.
     */
    public function change(int $index, $newItem) : self;
}
