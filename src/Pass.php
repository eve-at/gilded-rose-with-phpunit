<?php

namespace App;

class Pass extends GildedRose
{
    public function tick(): void
    {
            
        $this->_quality += $this->qualityDropPerDay;    

        if ($this->_sellIn <= 0) {
            $this->_quality = 0;  
        } else if ($this->_sellIn <= 5) {
            $this->_quality += 2;  
        } else if ($this->_sellIn <= 10) {
            $this->_quality += 1;  
        } 

        $this->_sellIn -= 1;
        
        $this->qualityCheckout();
    }
}
