<?php

namespace App;

class Product extends GildedRose
{
    public function tick(): void
    {

        $this->_sellIn -= 1;
        $this->_quality -= 1;
        
        if ($this->_sellIn <= 0) {
            $this->_quality -= 1;
        }
        
        $this->qualityCheckout();
    }
}
