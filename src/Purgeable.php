<?php

namespace Stratadox\Collection;

interface Purgeable extends Collection
{
    /**
     * Delete the item at a given position.
     *
     * @param int $index        Position to delete.
     * @return Purgeable|static The calling instance or an altered copy.
     */
    public function delete(int $index) : Purgeable;

    /**
     * Remove the given items.
     *
     * @param array ...$theUnwantedItems    Items to remove.
     * @return Purgeable|static             The calling instance or an altered copy.
     */
    public function remove(...$theUnwantedItems) : Purgeable;
}
