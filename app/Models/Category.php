<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function saveCategory ($request, $id= null)
    {
        Category::updateOrCreate(['id' => $id], [
            'name' => $request->name,
        ]);
    }
}
