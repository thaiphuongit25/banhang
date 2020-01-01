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
}
