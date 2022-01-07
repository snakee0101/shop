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
    protected $appends = ['storage_url'];

    public function getStorageUrlAttribute()
    {
        return Storage::url($this->url);
    }
}
