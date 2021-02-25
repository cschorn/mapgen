<?php


namespace MapGenerator\Map;

/**
 * An individual map tile
 *
 * TODO:
 * - more states/types -- maybe refactor to an interface?
 * - state/items on the tile
 */
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