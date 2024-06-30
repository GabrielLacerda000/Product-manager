<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Validate('required|min:5')]
    public $name = '';

    #[Validate('required|min:10')]
    public $description = '';

    #[Validate('required|min:5')]
    public $stock = '';

    #[Validate('required')]
    public $category = '';

    #[Validate('required|min:2')]
    public $price = '';
}
