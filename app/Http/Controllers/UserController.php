<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Customer;

class UserController extends Controller
{
    public function index(){
        $sellers = Seller::all();
        $customers = Customer::all();
        return view('admin/users', compact('sellers'), compact('customers'));
    }
}
