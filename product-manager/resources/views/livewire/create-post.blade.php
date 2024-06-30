<div class="w-4/12 mx-auto">
    <div class="bg-slate-700/10 rounded-lg mt-6 p-3 flex justify-center items-center">
        <form wire:submit="store">
            <div class="mb-3 w-full">
                <label for="name" class="block mb-2 font-medium text-gray-900">Name</label>
                <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @error('name') <span class="error">{{ $message }}</span> @enderror 
            </div>
     
            <div class="mb-3 w-full">
                <label for="description" class="block mb-2 font-medium text-gray-900">Description</label>
                <textarea type="text" id="description" wire:model="description"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500"></textarea>
                @error('description') <span class="error">{{ $message }}</span> @enderror 
            </div>
            
            <div class="mb-3 w-full">
                <label for="stock" class="block mb-2 font-medium text-gray-900">Stock</label>
                <input type="text" id="stock" wire:model="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @error('stock') <span class="error">{{ $message }}</span> @enderror 
            </div>
    
            <div class="mb-3 w-full">
                <label for="Price" class="block mb-2 font-medium text-gray-900">Price</label>
                <input type="text" id="Price" wire:model="price"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500">
                @error('price') <span class="error">{{ $message }}</span> @enderror 
            </div>
    
            <div class="mb-3 w-full">
                <label for="category" class="block mb-2 font-medium text-gray-900">Select a category</label>
                <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category') <span class="error">{{ $message }}</span> @enderror 
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none mt-3">Save</button>
        </form>
    </div> 
</div>