<?php

namespace App\Contracts;

interface Purchaseable {
    public function getInCartAttribute() :bool;
}
