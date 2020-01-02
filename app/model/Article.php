<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\ArticleCategory;
use App\model\Comment;

class Article extends Model
{
    public function article_category()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    protected $fillable = [
        'id', 'article_category_id', 'title', 'content', 'slug', 'thumbnail', 'status', 'meta_title', 'meta_keywords', 'meta_description'
    ];
}
