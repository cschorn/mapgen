<?php


namespace Map;


use MapGenerator\Map\Map;
use MapGenerator\Map\MapPrinter;
use MapGenerator\Map\Tile;
use PHPUnit\Framework\TestCase;

class MapPrinterTest extends TestCase
{
    /** @test */
    public function can_print_a_map()
    {
        $tiles = [
            new Tile(false),
            new Tile(true),
        ];
        $map = new Map(2, 1, $tiles);
        $printer = new MapPrinter($map);

        $printed = $printer->show();

        $this->assertEquals("#.\n", $printed);
    }
}