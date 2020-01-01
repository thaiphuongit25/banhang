<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Comment;

class Service extends Model
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
