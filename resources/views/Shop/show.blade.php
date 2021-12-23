@extends('layouts/shop')

@section('content')

<div class="bg-white">
  
  <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-2 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:grid-rows-1">
   <div class="h-50">
    <img src="{{ url('images/'. $shop_item->image) }}" class="w-full h-full object-center object-cover" >
   </div>
   
      <div class="mt-4 lg:mt-0 lg:col-span-1" style="margin-left: 15%">
          <h1 >{{ $shop_item->title }}</h1>
          <p>&euro; {{ $shop_item->price }}</p>
          
          <button class="btn btn-primary">
          In winkelwagen
          </button>
        
      </div>
        
  </div>

    <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-rows-1 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:grid-rows-1">
      <div class="relative z-10 flex items-baseline justify-between pt-10 pb-6 border-b border-gray-200">
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Omschrijving</h1>       
      </div>

      <div class="space-y-6" style="margin-top: 1%;">
        <p class="text-base text-gray-900">{{ $shop_item->description }}</p>
      </div>
    </div>
    
      
</div>
  
</div>



@endsection