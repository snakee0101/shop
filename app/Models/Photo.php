<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public static function decode($data)
    {
        $imgData = str_replace(' ','+', $data);
        $imgData = substr($imgData,strpos($imgData,",") + 1);
        return base64_decode($imgData);
    }
}
