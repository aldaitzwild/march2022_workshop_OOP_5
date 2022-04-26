<?php

namespace App;

class Water extends Tile
{
    public function __construct(int $x, int $y)
    {
        parent::__construct($x, $y);
        $this->setImage('water.jpg');
    }

    public function isCrossable(Movable $movable): bool
    {
        return false;
    }
}