<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $dates = ['shipping_date'];

    public function credentials()
    {
        return $this->hasOne(OrderCredentials::class);
    }
}
