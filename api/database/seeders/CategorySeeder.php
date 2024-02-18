<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'Autre'
        ]);
        
        Category::create([
            'category' => 'Restaurant'
        ]);
        
        Category::create([
            'category' => 'Hotel'
        ]);
        
        Category::create([
            'category' => 'Bar'
        ]);
        
        Category::create([
            'category' => 'Magasin'
        ]);
        
        Category::create([
            'category' => 'Divertissement'
        ]);
    }        
}
