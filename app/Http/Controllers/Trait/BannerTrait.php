<?php

namespace App\Http\Controllers\Trait;

use App\Models\Banner;

use App\Enums\GlobalEnum;

use Carbon\Carbon;

trait BannerTrait
{
    public function getBanner()
    {
        $banner = Banner::all();

        return $banner;
    }
}