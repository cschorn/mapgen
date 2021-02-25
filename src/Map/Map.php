<?php


namespace MapGenerator\Map;


use Generator;

/**
 * Manage a game map and provide access to the individual tiles
 *
 * TODO:
 * - add iterators for neighbors/connected tiles
 * - add support for arbitrary connections (teleporters, connections to different maps etc.)
 */
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

    public function lines(): Generator
    {
        $line = 0;

        while ($line < $this->height) {
            yield array_slice($this->tiles, $this->width * $line, $this->width);
            $line += 1;
        }
    }
}