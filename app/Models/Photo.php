<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Photo extends Model
{
    use HasFactory;

    protected $appends = ['encoded_data'];

    public $timestamps = false;
    protected $guarded = [];

    public function getEncodedDataAttribute()
    {
        if(str_contains(Route::currentRouteName(), 'admin') ) //this path is available only to admin routes, otherwise it causes error in layout
        {
            $raw_data = Storage::get( '/public/' . Str::after($this->url, 'storage') );
            return 'data:image/png;base64,' . base64_encode($raw_data);
        }

        return '';
    }

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
