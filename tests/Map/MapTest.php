<?php


namespace Map;


use MapGenerator\Map\Map;
use MapGenerator\Map\Tile;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    /** @test */
    public function can_instantiate_minimal_map()
    {
        $tile = new Tile(true);

        $map = new Map(1, 1, [$tile]);

        $this->assertSame($tile, $map->getTileAt(0, 0));
    }
}