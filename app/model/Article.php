<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function article_category()
    {
        return $this->belongsTo('App\model\ArticleCategory');
    }
}
