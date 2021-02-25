<?php


namespace Generators;


use MapGenerator\Generators\SingleTileGenerator;
use MapGenerator\Map\Tile;
use PHPUnit\Framework\TestCase;

class SingleTileGeneratorTest extends TestCase
{
    /** @test */
    public function it_generates_a_walkable_map()
    {
        $generator = new SingleTileGenerator(2, 2, Tile::class, [true]);
        $map = $generator->generate();

        $this->assertTrue($map->getTileAt(0, 0)->isWalkable());
        $this->assertTrue($map->getTileAt(1, 1)->isWalkable());
    }
}