<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Eletronics'
        ]);
        
        Category::create([
            'name' => 'Books'
        ]);
        
        Category::create([
            'name' => 'Clothing'
        ]);
        
        Category::create([
            'name' => 'Toys'
        ]);
        
        Category::create([
            'name' => 'Furniture'
        ]);
        
        Category::create([
            'name' => 'Drink'
        ]);
    }
}
