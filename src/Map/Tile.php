<?php


namespace MapGenerator\Map;


class Tile
{
    private bool $isWalkable = false;

    public function __construct(bool $isWalkable)
    {
        $this->isWalkable = $isWalkable;
    }

    public function isWalkable(): bool
    {
        return $this->isWalkable;
    }
}