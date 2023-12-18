<?php

namespace App;

class Brie extends GildedRose
{
    public function tick(): void
    {
        $this->_sellIn -= 1;

        if ($this->_sellIn <= 0) {
            $this->_quality += 1;  
        } 

        $this->_quality += 1;   

        $this->qualityCheckout();
    }
}
