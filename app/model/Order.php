<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\OrderDetail;

class Order extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'date_order', 'total', 'note'
    ];

     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function products()
     {
        return $this->belongsToMany(Product::class);
     }
}
