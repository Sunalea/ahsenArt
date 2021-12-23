<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item_info; 
use App\Models\Items;


class AdminController extends Controller
{
    public function index(){
        $items = Items::all();
        return view('admin/index', compact('items'));
    }

    public function create()
    {
        $items = Item_info::all();
        return view('admin/create', compact('items'));
    } 

    public function update(Request $request, Items $item)
    {
    
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'class' => 'required',
            'price' => 'required|between:0,99.99'
            
        ]);
        
        (int)$request->get('price');
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $item->update($input);
    
        return back()
                        ->with('success','Product updated successfully');
                        
    } 

    public function store(Request $request){  

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Items::create($input);
        return redirect()->route('items.create');
    }

    public function edit(Items $item){
        $data = Item_info::all();
        return view('admin/edit', compact('item'), compact('data'));
    }
}
