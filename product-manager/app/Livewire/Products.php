<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::with('category')->get();
    }
    
    public function render()
    {
        return view('livewire.products');
    }
}
