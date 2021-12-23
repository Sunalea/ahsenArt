<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __( 'Edit item id nr. '.$item->id) }}
      </h2>
  </x-slot>

  @if($errors->any())
  {!! implode('', $errors->all('<div>:message</div>')) !!}
  @endif

  <div class="mt-2 md:mt-0 md:col-span-2"  style="width: 1250px; margin: auto;">
    <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-6 py-4 bg-white sm:p-6" style="width: 1250px; margin: auto;">
            <div class="grid grid-cols-2 gap-2">
              <input type="text" name="title" class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl border-none" value="{{ $item->title }}">
              <div class="mt-4 lg:mt-0 lg:row-span-3">
              &euro; <input name="price" type="text" value="{{ $item->price }}" placeholder="{{ $item->price }}" class="text-3xl text-gray-900 border-none">
              
              <select name="class" class="mt-1 block w-full py-0.5 px-3 border-none bg-white rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs">
                <option>{{ $item->class }}</option>
                @foreach ($data as $classes)
                  <option>{{ $classes->class }}</option>
                @endforeach
                </select>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-2">

              <div class="shadow aspect-w-4 aspect-h-5 sm:rounded-full sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4" style="width: 300px;">
                <img src="{{ url('images/'.$item->image) }}" name="image" alt="Model wearing plain white basic tee." class="w-full h-full rounded-full">     
              </div>

              <div class="mt-1">
                <textarea id="about" name="description" rows="3" class=" border-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-lg" style="height: 300px">{{ $item->description }}</textarea>
              </div>

              <input type="file" name="image" class="form-control" placeholder="image" style="margin-top: 5%">
            </div>
          </div> 

          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6"  style="width: 1250px; margin: auto;">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Update
            </button>
          </div> 
    </div> 

    </form>
        
</div>
    

</x-app-layout>