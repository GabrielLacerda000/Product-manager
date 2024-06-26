<div class="bg-gray-400 border-2 border-gray-700 rounded-lg p-3 m-3 w-76 text-center">
    <h2><span class="font-bold">Title:</span>{{ $product->name }}</h2>
    <p> <span class="font-bold">Description:</span> {{ $product->description }}</p>
    <p><span class="font-bold">price:</span> ${{ $product->price }}</p>
    <p><span class="font-bold">stock:</span> {{ $product->stock }}</p>
</div>