<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->category_id = 1;
        $product->name = "foco";
        $product->foto = "no disponible";
        $product->due_date = now();
        $product->state = "ACTIVO";
        $product->slug = Str::uuid();
        $product->save(['timestamps' => false]);

        $product2 = new Product();
        $product2->category_id = 3;
        $product2->name = "aceite 30W50";
        $product2->foto = "no disponible";
        $product2->due_date = now();
        $product2->state = "ACTIVO";
        $product2->slug = Str::uuid();
        $product2->save(['timestamps' => false]);

        $product3 = new Product();
        $product3->category_id = 4;
        $product3->name = "sacagrampas";
        $product3->foto = "no disponible";
        $product3->due_date = now();
        $product3->state = "ACTIVO";
        $product3->slug = Str::uuid();
        $product3->save(['timestamps' => false]);
    }
}
