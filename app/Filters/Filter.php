<?php

namespace App\Filters;

interface Filter {
    public static function attribute($attribute) :self; //sets the attribute to filter through
    public function values(array $values) :string; //returns generated MeiliSearch filter

    public function __construct($attribute);
}
