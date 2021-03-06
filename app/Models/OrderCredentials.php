<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCredentials extends Model
{
    use HasFactory;
    protected $table = 'order_credentials';

    protected $guarded = [];
    public $timestamps = false;
}
