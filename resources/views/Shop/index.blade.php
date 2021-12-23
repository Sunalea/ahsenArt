<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

@extends('layouts/shop')

@section('content')

<div class="bg-white">
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative z-10 flex items-baseline justify-between pt-10 pb-6 border-b border-gray-200">
      <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Nieuwe producten</h1>
      
    </div>
    

    
    <div class="max-w-2xl mx-auto py-6 px-4 sm:py-35 sm:px-6 lg:max-w-7xl lg:px-8">

      <div class="grid grid-cols-1 gap-y-20 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-10">
      @foreach($shop_items as $item)
      <a href="{{ route('shop_items.show', $item->id) }}" class="group">
        <div class="object-none h-48 w-full">
          <img src="{{ url('images/'.$item->image) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75  rounded border">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
          {{ $item->title }}
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          &euro; {{ $item->price }}
        </p>
      </a>
      @endforeach
      <!-- More products... -->
      </div>
      </div>

    </main>
</div>

@endsection 

