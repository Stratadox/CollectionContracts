<?php

namespace Stratadox\Collection;

interface Alterable extends Collection
{
    /**
     * Update the index with the new item.
     *
     * @param int   $index      Position to update
     * @param mixed $newItem    The item to put there instead
     * @return Alterable|static The calling instance or an altered copy.
     */
    public function change(int $index, $newItem) : Alterable;

    /**
     * Delete the item at a given position.
     *
     * @param int $index        Position to delete.
     * @return Alterable|static The calling instance or an altered copy.
     */
    public function delete(int $index) : Alterable;

    /**
     * Remove the given items.
     *
     * @param array ...$theUnwantedItems    Items to remove.
     * @return Alterable|static             The calling instance or an altered copy.
     */
    public function remove(...$theUnwantedItems) : Alterable;
}
