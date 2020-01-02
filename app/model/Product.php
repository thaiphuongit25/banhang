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

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function quantity_by_order()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
