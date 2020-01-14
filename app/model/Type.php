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
        'id', 'name', 'desc', 'slug', 'status'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function scopeShowable($query)
    {
        return $query->where('status', 1);
    }
}
