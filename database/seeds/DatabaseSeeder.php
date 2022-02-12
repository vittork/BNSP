<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Create new user
        $user = new User;
        $user->name     = 'admin';
        $user->email    = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();


        // Create new product
        $products   = [
            [
                'name' => 'Superior Room',
                'harga' => '500000',
                'image' => 'SR.jpg',
            ],
            [
                'name' => 'Deluxe Room',
                'harga' => '1000000',
                'image' => 'DR.jpg',
            ],
            [
                'name' => 'Executive Room',
                'harga' => '1500000',
                'image' => 'ER.jpg',
            ]
        ];

        foreach($products as $product) {
            $newProduct = new Product;
            $newProduct->name           = $product['name'];
            $newProduct->harga          = $product['harga'];
            $newProduct->img_type_room  = $product['image'];
            $newProduct->save();
        }
    }
}
