<?php

namespace Stratadox\Collection;

interface Implodable extends Collection
{
    /**
     * Converts the collection to a string by gluing the items together.
     *
     * @return string           Imploded string.
     * @throws ConversionFailed When the collection could not be converted.
     */
    public function implode($glue = ', ') : string;
}
