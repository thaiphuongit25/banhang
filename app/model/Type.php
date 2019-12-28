<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Category;

class Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'desc', 'slug'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
