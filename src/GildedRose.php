<?php

namespace App;

use Exception;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    final private static function resolveClass($name): string
    {
        switch($name) {
            case 'Sulfuras, Hand of Ragnaros':
                return Sulfuras::class;
            case 'normal':
                return Product::class;
            case 'Aged Brie':
                return Brie::class;
            case 'Backstage passes to a TAFKAL80ETC concert':
                return Pass::class;
            default:
                throw new Exception('Invalid product name ' . $name);
        }
    }

    final public static function of($name, $quality, $sellIn)
    {
        return new (static::resolveClass($name))($name, $quality, $sellIn);
    }

    public function tick()
    {
        //
    }
}
