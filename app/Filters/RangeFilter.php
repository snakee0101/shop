<?php

namespace App\Filters;

class RangeFilter implements Filter
{
    private string $attribute;

    public static function attribute($attribute) :static
    {
        return new static($attribute);
    }

    public function values(array $values): string
    {
        return "{$this->attribute} {$values[0]} TO {$values[1]}";
    }

    public function __construct($attribute)
    {
        $this->attribute = $attribute;
    }
}
