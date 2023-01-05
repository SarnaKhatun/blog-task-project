<?php

namespace App\Models;

use App\Helper\Helpers;
use App\Http\Controllers\SliderController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];


    public static function saveSliderData($request, $id = null)
    {
        Slider::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'description' => $request->description,
            'image' => Helpers::imageUpload($request->file('image'), 'assets/slider/img/', isset($id) ? Slider::find($id)->image : ''),
        ]);
    }
}
