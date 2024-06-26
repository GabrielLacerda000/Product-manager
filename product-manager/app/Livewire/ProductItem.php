<?php

namespace App\Livewire;

use Livewire\Component;

class ProductItem extends Component
{

    public $name;
    public $description;
    public $price;
    public $stock;
 
    public function mount($name = null, $description = null, $price = null, $stock = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }
    
    public function render()
    {
        return view('livewire.product-item');
    }
}
