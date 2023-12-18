<?php

namespace App;

interface TickableInterface
{
    public function tick(): void;
    public function qualityCheckout(): void;
}
