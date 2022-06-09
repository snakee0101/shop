<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface Categorizable
{
    public function parentCategory();

    public function subCategories();

    public function hasSubCategories(): bool;

    public static function topLevelCategories(): Builder;
}
