<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public static function store($encoded_image, Model $model)
    {
        $unique_name = now()->timestamp . Str::uuid();

        $path_1 = '/public/images/' . $unique_name . '.png';
        Storage::put( $path_1, Photo::decode($encoded_image));

        $path_2 = '/storage/images/' . $unique_name . '.png';
        $model->photos()->create([
            'url' => $path_2
        ]);
    }
}
