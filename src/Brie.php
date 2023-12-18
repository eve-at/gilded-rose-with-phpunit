<?php

namespace App;

class Brie extends GildedRose
{
    public function tick(): void
    {
        $this->_sellIn -= 1;

        if ($this->_sellIn <= 0) {
            $this->_quality += $this->qualityDropPerDay;  
        } 

        $this->_quality += $this->qualityDropPerDay;   

        $this->qualityCheckout();
    }
}
