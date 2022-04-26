<?php

namespace App;

class Bush extends Tile
{
    public function __construct(int $x, int $y)
    {
        parent::__construct($x, $y);
        $this->setImage('bush.png');
    }

    public function isCrossable(Movable $movable): bool
    {
        if($movable instanceof Hind)
            return true;
            
        return false;
    }
}