<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Category;
use App\model\Brand;
use App\model\Unit;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'desc', 'brand_id', 'category_id', 'specification', 'price', 'image', 'slug', 'meta_title',
       'meta_keywords', 'meta_description', 'specification', 'quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
