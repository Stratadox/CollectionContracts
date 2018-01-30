<?php

namespace Stratadox\Collection;

interface Rotatable
{
    public function rotate(int $amount) : Rotatable;
}
