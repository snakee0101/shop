<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormMessage extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'is_replied' => 'bool'
    ];

    public function formatted()
    {
        return nl2br($this->message);
    }

    public function reply()
    {
        return $this->morphOne(Reply::class, 'object');
    }
}
