<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ShopController extends Controller
{
    public function index(){
        $shop_items = Items::all();
        return view('Shop/index', compact('shop_items'));
    }

    public function show(Items $shop_item){
        return view('Shop/show', compact('shop_item'));
    }
    
}
