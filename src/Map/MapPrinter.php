<?php


namespace MapGenerator\Map;

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