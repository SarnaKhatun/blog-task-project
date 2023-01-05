<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected static $tag;

    public static function addTag ($request)
    {
        self::$tag = new Tag();
        self::$tag->name = $request->name;
        self::$tag->save();
    }


    public static function updateTag ($request, $id)
    {
        self::$tag = Tag::where('id', $id)->first();
        self::$tag->name = $request->name;
        self::$tag->save();
    }


}
