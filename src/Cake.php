<?php

namespace App;

class Cake extends GildedRose
{
    public function tick(): void
    {
        $this->_sellIn -= 1;
        $this->_quality -= 2;
        
        if ($this->_sellIn <= 0) {
            $this->_quality -= 2;
        }
        
        $this->qualityCheckout();
    }
}
