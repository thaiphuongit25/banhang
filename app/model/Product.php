<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Category;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'desc', 'specification', 'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
