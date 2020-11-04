<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            [
                'name' => 'Blusa 1',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 5,
                'price' => 580,
                'category_id' => 1
            ],
            [
                'name' => 'Blusa 2',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 10,
                'price' => 700,
                'category_id' => 1
            ],
            [
                'name' => 'Vestido 1',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 10,
                'price' => 1200,
                'category_id' => 2
            ],
            [
                'name' => 'Vestido 2',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 3,
                'price' => 1400,
                'category_id' => 2
            ],
            [
                'name' => 'Vestido 3',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 3,
                'price' => 1300,
                'category_id' => 2
            ],
            [
                'name' => 'Short 1',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 6,
                'price' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Short 2',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 3,
                'price' => 150,
                'category_id' => 3
            ],
            [
                'name' => 'Pantalón 1',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 5,
                'price' => 300,
                'category_id' => 4
            ],
            [
                'name' => 'Pantalón 2',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 10,
                'price' => 350,
                'category_id' => 4
            ],
            [
                'name' => 'Pantalón 3',
                'description' => 'There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour, or randomised words.',
                'quantity' => 10,
                'price' => 390,
                'category_id' => 4
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }

    }
}
