<?php

namespace App\Models;

use App\Helper\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
      'name',
      'short_description',
      'long_description',
      'image',
      'viewers',
    ];


    public static function saveBlogData($request, $id = null)
    {
        Blog::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => Helpers::imageUpload($request->file('image'), 'assets/blog/img/', isset($id) ? Blog::find($id)->image : ''),
            'viewers' => $request->viewers,
        ]);
    }


    public function category()
    {
       return $this->belongsTo(Category::class);
    }
}
