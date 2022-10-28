<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG Mobile',
                'price'=>'2000',
                'description'=>'A smartphone with 4GB ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://i.pinimg.com/564x/fd/45/f2/fd45f24fa847ba0d049dad1ecb7cb061.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'5000',
                'description'=>'A smartphone with 8GB ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://i.pinimg.com/564x/ef/10/de/ef10de182fdd72f4fe270d639513e868.jpg'
            ],
            [
                'name'=>'Sony Tv',
                'price'=>'9000',
                'description'=>'A smarttv with much more features',
                'category'=>'tv',
                'gallery'=>'https://i.pinimg.com/564x/89/b8/7c/89b87c709ba9d70a6b3e6c4979ec67a4.jpg'
            ],
            [
                'name'=>'LG Fridge',
                'price'=>'100000',
                'description'=>'A smartfridge with much more features',
                'category'=>'fridge',
                'gallery'=>'https://i.pinimg.com/564x/1d/7d/f5/1d7df5bc02d9663f92c333ccf40c8e70.jpg'
            ]
       
          
        ]);
    }
}
