<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Certifique-se de que esta linha está presente

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Arroz', 'description' => 'Arroz de grão longo']);
        Product::create(['name' => 'Feijão', 'description' => 'Feijão preto']);
    }
}
