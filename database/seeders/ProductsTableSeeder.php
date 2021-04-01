<?php

namespace Database\Seeders;

use App\Http\Controllers\ProductsController;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory()->count(30)->create(); 
       
    }
}
