<?php

namespace Stratadox\Collection;

interface JsonSerializable extends Collection
{
    /**
     * Exports the collection into a json string.
     *
     * @return string           Json formatted string.
     * @throws ConversionFailed When the collection could not be converted.
     */
    public function json() : string;
}
