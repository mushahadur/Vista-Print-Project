<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $hidden = [
        'category_id',
        'title',
        'sub_title',
        'tag',
        'thumbnail',
        'slide_image',
        'header_image',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
