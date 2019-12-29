<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Category;
use App\model\Brand;

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

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
