<?php

namespace App;

use Exception;

class GildedRose implements TickableInterface
{
    public function __construct(protected string $_name, protected int $_quality, protected int $_sellIn)
    {
        //
    }

    final private static function resolveClass(string $name): string
    {
        return match($name) {
            'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
            'normal' => Product::class,
            'Aged Brie' => Brie::class,
            'Backstage passes to a TAFKAL80ETC concert' => Pass::class,
            default => throw new Exception('Invalid product name ' . $name)
        };
    }

    final public static function of(string $name, int $quality, int $sellIn): TickableInterface
    {
        return new (static::resolveClass($name))($name, $quality, $sellIn);
    }

    public function tick(): void
    {
        //
    }

    public function qualityCheckout(): void
    {
        if ($this->_quality < 0) {
            $this->_quality = 0;
        }

        if ($this->_quality > 50) {
            $this->_quality = 50;
        }    
    }

    public function __get($property): mixed
    {
        return match($property) {
            'name' => $this->_name,
            'quality' => $this->_quality,
            'sellIn' => $this->_sellIn,
            default => throw new Exception('Error: Cannot access property ' . $property),
        };
    }
}
