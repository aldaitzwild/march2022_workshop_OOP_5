<?php

namespace App;

class Grass extends Tile
{
    public function __construct(int $x, int $y)
    {
        parent::__construct($x, $y);
        $this->setImage('grass.png');
    }
}