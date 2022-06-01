<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormMessage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function formatted()
    {
        return nl2br($this->message);
    }
}
