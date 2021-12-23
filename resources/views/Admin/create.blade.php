<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New item') }}
        </h2>
    </x-slot>

    <div class="mt-2 md:mt-0 md:col-span-2"  style="width: 1250px; margin: auto;">
    <form action="{{ route('item_info.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-6 py-4 bg-white sm:p-6" style="width: 1250px; margin: auto;">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="Title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input name="price" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
            
            <div class="col-span-6 sm:col-span-3" style="margin-top: 1%">
              <label for="about" class="block text-sm font-medium text-gray-700">
                Description
              </label>
              <div class="mt-1">
                <textarea id="about" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Add a description"></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500">
                Brief description for your product.
              </p>
            </div>

            <div class="col-span-6 sm:col-span-3" style="margin-top: 1%">
                <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                <select name="class" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @foreach ($items as $item)
                  <option>{{ $item->group }}</option>
                @endforeach
                </select>
            </div>

            <div class="col-span-6 sm:col-span-3" style="margin-top: 1%">
              <label for="image" class="block text-sm font-medium text-gray-700">Select image</label>
              <input type="file" name="image" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >
            </div>

        </div>
        
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6"  style="width: 1250px; margin: auto;">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
    </div>
    </div> 
</form>

</div>
  </div>
</div>
    </x-app-layout>