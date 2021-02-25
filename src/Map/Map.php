<?php


namespace MapGenerator\Map;


class Map
{
    private int $width;
    private int $height;

    /** @var array<Tile> */
    private array $tiles;

    public function __construct(int $width, int $height, array $tiles = [])
    {
        $this->width = $width;
        $this->height = $height;
        $this->tiles = $tiles;
    }

    public function getTileAt(int $x, int $y): Tile
    {
        return $this->tiles[$y * $this->width + $x];
    }
}