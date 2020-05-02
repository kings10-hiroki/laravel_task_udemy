<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $area_tokyo = Area::find(1)->shops;

        $shop = Shop::find(1)->area->name;

        $shop_route = Shop::find(1)->routes()->get();

        dd($area_tokyo, $shop, $shop_route);
    }
}
