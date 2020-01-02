<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Article;

class ArticleCategory extends Model
{
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    protected $fillable = [
        'id', 'name', 'slug', 'status'
    ];
}
