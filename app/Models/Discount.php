<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];
    protected $dates = ['active_until'];

}
