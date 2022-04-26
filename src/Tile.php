<?php

namespace App;

abstract class Tile implements Mappable
{
    private int $x;
    private int $y;
    private string $image;
    private bool $crossable = true;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Get the value of x
     */ 
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * Get the value of y
     */ 
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y): void
    {
        $this->y = $y;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function isCrossable(Movable $movable): bool
    {
        return $this->crossable;
    }
}