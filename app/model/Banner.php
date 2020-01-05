<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\BannerItem;

class Banner extends Model
{
    public function bannerItems()
    {
        return $this->hasMany(BannerItem::class);
    }
}
