<?php

namespace Stratadox\Collection;

interface Searchable extends Collection
{
    /**
     * Checks if the item exists in the collection.
     *
     * An item is considered "contained in a collection" if it is of the same
     * type and has the same value(s) as any of the items in the collection.
     *
     * For non-objects, this means strict checking. For objects, however, it
     * means loose checking, according to php standards.
     *
     * @param mixed $item The item to check for.
     * @return bool       Whether the item is in the collection.
     */
    public function has($item) : bool;

    /**
     * Checks if the object is part of the collection.
     *
     * An object is considered "part of a collection" if it has the same
     * reference as any of the items on the collection.
     *
     * @param object $object The object to check for.
     * @return bool          Whether the object is in the collection.
     */
    public function hasThe($object) : bool;

    /**
     * Finds the position of the item in the collection.
     *
     * An item is considered "found" if it is of the same type and has the same
     * value(s) as the encountered item in the collection.
     *
     * For non-objects, this means strict checking. For objects, however, it
     * means loose checking, according to php standards.
     *
     * @param mixed $item The item to look for.
     * @return int        The position of the item in the collection.
     * @throws NotFound   When the item is not in the collection.
     */
    public function find($item) : int;

    /**
     * Finds the position of the object in the collection by comparing the
     * references.
     *
     * @param object $object The object to look for.
     * @return int           The position of the item in the collection.
     * @throws NotFound      When the item is not in the collection.
     */
    public function findThe($object) : int;
}
