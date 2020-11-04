<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Blusas',
                'description' => 'Categoria de blusas de diferentes modelos'
            ],
            [
                'name' => 'Vestidos',
                'description' => 'Categoria de vestidos de diferentes modelos'
            ],
            [
                'name' => 'Shorts',
                'description' => 'Categoria de Shorts de diferentes modelos'
            ],
            [
                'name' => 'Pantalones',
                'description' => 'Categoria de Pantalones de diferentes modelos'
            ],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
