<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "autorepuestos";
        $category->description = "Todo tipo de repuestos de automovil";
        $category->save(['timestamps' => false]);
        
        $category2 = new Category();
        $category2->name = "llantas";
        $category2->description = "Llantas para vehiculos livianos y pesados";
        $category2->save(['timestamps' => false]);

        $category3 = new Category();
        $category3->name = "lubricantes";
        $category3->description = "Todo tipo de libricantes como: Aceites de motor y caja";
        $category3->save(['timestamps' => false]);

        $category4 = new Category();
        $category4->name = "material de oficina";
        $category4->description = "engloba todo el material de oficina";
        $category4->save(['timestamps' => false]);
    }
}
