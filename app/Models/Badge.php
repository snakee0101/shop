<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function style()
    {
        return $this->hasOne(BadgeStyle::class, 'id');
    }
}
