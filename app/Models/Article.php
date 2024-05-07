<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'short_description', 'description', 'language_id', 'category', 'status', 'image'
    ];

    public function article_category() {
        return $this->belongsTo(ArticleCategory::class);
    }

}
