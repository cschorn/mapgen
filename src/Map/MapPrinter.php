<?php


namespace MapGenerator\Map;

/**
 * Generate ASCII output for a given map
 *
 * TODO:
 * - factor out tile conversion as states grow
 * - be ready to factor out interface/base class for other backends
 */
class MapPrinter
{
    private Map $map;

    public function __construct(Map $map)
    {
        $this->map = $map;
    }

    public function show(): string
    {
        $chars = [];

        foreach ($this->map->lines() as $line) {
            $chars = array_merge($chars, array_map(fn (Tile $tile) => $tile->isWalkable() ? '.' : '#', $line));
            $chars[] = "\n";
        }

        return implode('', $chars);
    }
}