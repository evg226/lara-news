<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'title',
        'slug',
        'author',
        'image',
        'description',
        'content',
        'category_id',
        'status'
    ];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
