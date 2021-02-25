<?php


namespace MapGenerator\Generators;

use MapGenerator\Map\Map;
use MapGenerator\Map\Tile;

/**
 * Generates a map with the given dimensions filled with tiles of type $baseClass
 *
 * Generators might be chainable, so this might be useful for base maps (water, empty etc.)
 */
class SingleTileGenerator
{
    private int $width;
    private int $height;

    private string $baseClass;
    private array $constructorArgs;

    public function __construct(int $width, int $height, string $baseClass, array $constructorArgs = [])
    {
        $this->width = $width;
        $this->height = $height;

        $this->baseClass = $baseClass;
        $this->constructorArgs = $constructorArgs;
    }

    public function generate(): Map
    {
        $tiles = [];
        for ($i = 0; $i < $this->width * $this->height; ++$i) {
            $tiles[] = new Tile(...$this->constructorArgs);
        }

        return new Map($this->width, $this->height, $tiles);
    }
}