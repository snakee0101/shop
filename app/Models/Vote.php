<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function voted_object()
    {
        return $this->morphTo('object');
    }
}
