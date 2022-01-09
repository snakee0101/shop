<?php

namespace App\Filters;

class MultipleCheckFilter implements Filter
{
    private string $attribute;

    public static function attribute($attribute) :static
    {
        return new static($attribute);
    }

    public function values(array $values): string
    {
        $expression = "";

        foreach($values as $range)
            $expression .= "{$this->attribute} = '$range' OR ";

        return substr($expression, 0, -4);
    }

    public function __construct($attribute)
    {
        $this->attribute = $attribute;
    }
}
