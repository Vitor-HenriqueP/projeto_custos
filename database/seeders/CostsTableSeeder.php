<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cost; // Certifique-se de que esta linha está presente
use App\Models\Product;

class CostsTableSeeder extends Seeder
{
    public function run()
    {
        $product = Product::find(1); // Assumindo que o primeiro produto é o Arroz
        Cost::create(['product_id' => $product->id, 'cost_value' => 100.00, 'date' => now()]);
        Cost::create(['product_id' => $product->id, 'cost_value' => 120.00, 'date' => now()->subDays(30)]);
    }
}
