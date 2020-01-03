<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Product;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'desc', 'slug', 'logo'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
