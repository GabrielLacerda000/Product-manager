<main class="bg-gray-200 min-h-52 w-3/6 mt-3 rounded-md mx-auto">
    {{-- @foreach ($products as $product)
        <livrewire:product-item :$product :key='$product->id'>
    @endforeach  --}}

    @foreach ( $products as $product )
        <div class="bg-gray-400 border-2 border-gray-700 rounded-lg p-3 m-3 w-76 text-center" wire:key="{{ $product->id }}">
            <h2><span class="font-bold">Title:</span>{{ $product->name }}</h2>
            <p> <span class="font-bold">Description:</span> {{ $product->description }}</p>
            <p><span class="font-bold">price:</span> ${{ $product->price }}</p>
            <p><span class="font-bold">stock:</span>{{ $product->stock }}</p>
        </div>
    @endforeach
</main>