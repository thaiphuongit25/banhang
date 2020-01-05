<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Banner;

class BannerItem extends Model
{
    public function banner()
    {
        return $this->belongsTo(Banner::class);
    }
}
