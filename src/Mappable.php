<?php

namespace App;

use Movable;

interface Mappable
{
    public function getX(): int;
    public function getY(): int;
    public function getImage(): string;

    public function setImage(string $image): void;
}