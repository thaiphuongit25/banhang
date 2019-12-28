<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Type;
use App\model\Product;

class Category extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'type_id', 'desc', 'slug'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
