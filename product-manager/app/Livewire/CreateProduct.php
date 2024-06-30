<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    public $name;
    public $description;
    public $stock;
    public $price;
    public $category;

    public $categories;

    public ProductForm $form;

    public function mount() {
        $this->categories = Category::all();
    }

    public function store()
    {
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'stock' => $this->stock,
            'price' => $this->price,
            'category_id' => $this->category
        ]);

        session()->flash('status', 'Product successfully created.');

        return $this->redirect('/products');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
