<?php

namespace App\Models;

use App\Traits\HasSubcategories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory, HasSubcategories;

    public $timestamps = false;

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
