<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //  DB::table('users')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'user',
        //         'email' => 'user@gmail.com',
        //         'password' => Hash::make('123'),
        //         'avatar' => null,
        //         'level' => 0,
        //         'description' => null,
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('123456'),
        //         'avatar' => null,
        //         'level' => 0,
        //         'description' => null,
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Quoc kiet',
        //         'email' => 'quockiet@gmail.com',
        //         'password' => Hash::make('123456'),
        //         'avatar' => 'avatar-0.png',
        //         'level' => 1,
        //         'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'Duy Tu',
        //         'email' => 'duytu@gmail.com',
        //         'password' => Hash::make('123456'),
        //         'avatar' => 'avatar-1.png',
        //         'level' => 1,
        //         'description' => null,
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'Duy Nien',
        //         'email' => 'duynien@gmail.com',
        //         'password' => Hash::make('123456'),
        //         'avatar' => 'avatar-2.png',
        //         'level' => 1,
        //         'description' => null,
        //     ],
        //  ]);

        // DB::table('blogs')->insert([
        //     [
        //         'user_id' => 3,
        //         'title' => 'The Personality Trait That Makes People Happier',
        //         'image' => 'blog-1.jpg',
        //         'category' => 'TRAVEL',
        //         'content' => '',
        //     ],
        //     [
        //         'user_id' => 3,
        //         'title' => 'This was one of our first days in Hawaii last week.',
        //         'image' => 'blog-2.jpg',
        //         'category' => 'New',
        //         'content' => '',
        //     ],
        //     [
        //         'user_id' => 3,
        //         'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
        //         'image' => 'blog-3.jpg',
        //         'category' => 'TRAVEL',
        //         'content' => '',
        //     ],
        //     [
        //         'user_id' => 3,
        //         'title' => 'Happppppy New Year! I know I am a little late on this post',
        //         'image' => 'blog-4.jpg',
        //         'category' => 'New',
        //         'content' => '',
        //     ],
        //     [
        //         'user_id' => 3,
        //         'title' => 'Absolue collection. The Lancome team has been one…',
        //         'image' => 'blog-5.jpg',
        //         'category' => 'MODEL',
        //         'content' => '',
        //     ],
        //     [
        //         'user_id' => 3,
        //         'title' => 'Writing has always been kind of therapeutic for me',
        //         'image' => 'blog-6.jpg',
        //         'category' => 'New',
        //         'content' => '',
        //     ],
        // ]);

        // DB::table('brands')->insert([
        //     [
        //         'name' => 'Dior',
        //     ],
        //     [
        //         'name' => 'LV',
        //     ],
        //     [
        //         'name' => 'Gucci',
        //     ],
        //     [
        //         'name' => 'Celine',               
        //     ],
        //     [
        //         'name' => 'BOSS',
        //     ],
        // ]);

        // DB::table('product_categories')->insert([
        //     [
        //         'name' => 'Men',
        //     ],
        //     [
        //         'name' => 'Women',
        //     ],
        //     [
        //         'name' => 'Kids',
        //     ],
        // ]);

        // DB::table('products')->insert([
        //     [
        //         'id' => 1,
        //         'brand_id' => 1,
        //         'category_id' => 2,
        //         'name' => 'Guangzhou sweater',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
        //         'content' => '',
        //         'price' => 629.99,
        //         'quantity' => 20,
        //         'discount' => 495,   
        //         'weight' => null,
        //         'featured' => true,           
        //         'tag' => 'perfume',
        //     ],
        //     [
        //         'id' => 2,
        //         'brand_id' => 2,
        //         'category_id' => 2,
        //         'name' => 'Guangzhou sweater',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 35,
        //         'quantity' => 20,
        //         'discount' => 13,
        //         'weight' => null,
        //         'featured' => true,  
        //         'tag' => 'perfume',
        //     ],
        //     [
        //         'id' => 3,
        //         'brand_id' => 3,
        //         'category_id' => 2,
        //         'name' => 'Guangzhou sweater',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 35,
        //         'quantity' => 20,
        //         'discount' => 34,  
        //         'weight' => null,
        //         'featured' => true,               
        //         'tag' => 'perfume',
        //     ],
        //     [
        //         'id' => 4,
        //         'brand_id' => 4,
        //         'category_id' => 1,
        //         'name' => 'Microfiber Wool Scarf',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 64,
        //         'quantity' => 20,
        //         'discount' => 35,  
        //         'weight' => null,
        //         'featured' => true,                
        //         'tag' => 'perfume',
        //     ],
        //     [
        //         'id' => 5,
        //         'brand_id' => 1,
        //         'category_id' => 3,
        //         'name' => "Men's Painted Hat",
        //         'description' => null,
        //         'content' => null,
        //         'price' => 44,
        //         'quantity' => 20,
        //         'discount' => 35, 
        //         'weight' => null,
        //         'featured' => true,            
        //         'tag' => 'perfume',
        //     ],
        //     [
        //         'id' => 6,
        //         'brand_id' => 1,
        //         'category_id' => 2,
        //         'name' => 'Converse Shoes',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 35,
        //         'quantity' => 20,
        //         'discount' => 34,  
        //         'weight' => null,
        //         'featured' => true,                
        //         'tag' => 'perfome',
        //     ],
        //     [
        //         'id' => 7,
        //         'brand_id' => 1,
        //         'category_id' => 1,
        //         'name' => 'Pure Pineapple',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 64,
        //         'quantity' => 20,
        //         'discount' => 35,   
        //         'weight' => null,
        //         'featured' => true,              
        //         'tag' => 'perfome',
        //     ],
        //     [
        //         'id' => 8,
        //         'brand_id' => 1,
        //         'category_id' => 1,
        //         'name' => '2 Layer Windbreaker',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 44,
        //         'quantity' => 20,
        //         'discount' => 35,
        //         'weight' => null,
        //         'featured' => true,  
        //         'tag' => 'perfume',
        //     ],
        //     [
        //         'id' => 9,
        //         'brand_id' => 1,
        //         'product_category_id' => 1,
        //         'name' => 'Converse Shoes',
        //         'description' => null,
        //         'content' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'discount' => 34,                
        //         'featured' => true,
        //         'tag' => 'perfume',
        //     ],
        // ]);

        // DB::table('product_images')->insert([
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1.jpg',
        //     ],
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1-1.jpg',
        //     ],
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1-2.jpg',
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path' => 'product-2.jpg',
        //     ],
        //     [
        //         'product_id' => 3,
        //         'path' => 'product-3.jpg',
        //     ],
        //     [
        //         'product_id' => 4,
        //         'path' => 'product-4.jpg',
        //     ],
        //     [
        //         'product_id' => 5,
        //         'path' => 'product-5.jpg',
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path' => 'product-6.jpg',
        //     ],
        //     [
        //         'product_id' => 7,
        //         'path' => 'product-7.jpg',
        //     ],
        //     [
        //         'product_id' => 8,
        //         'path' => 'product-8.jpg',
        //     ],
        //     [
        //         'product_id' => 9,
        //         'path' => 'product-9.jpg',
        //     ],
        // ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'size' => '0,2l',
                'quantity' => 10,
            ],
         
           
            [
                'product_id' => 1,
                'size' => '0,3l',
                'quantity' => 15,
            ],
           




            [
                'product_id' => 1,
                'size' => '0,5l',
                'quantity' => 20,
            ],
            // [
            //     'product_id' => 4,
            //     'size' => '0,2l',
            //     'quantity' => 20,
            // ],
            // [
            //     'product_id' => 5,
            //     'size' => '0,3l',
            //     'quantity' => 20,
            // ],
            // [
            //     'product_id' => 6,
            //     'size' => '0,2l',
            //     'quantity' => 5,
            // ],
            // [
            //     'product_id' => 7,
            //     'size' => '0,3',
            //     'quantity' => 10,
            // ],
            // [
            //     'product_id' => 8,
            //     'size' => '0,5l',
            //     'quantity' => 15,
            // ],



            // [
            //     'product_id' => 9,
            //     'size' => '0,3l',
            //     'quantity' => 10,
            // ],
            // [
            //     'product_id' => 10,
            //     'size' => '0,5l',
            //     'quantity' => 10,
            // ],
            // [
            //     'product_id' => 11,
            //     'size' => '0,2l',
            //     'quantity' => 5,
            // ],
            // [
            //     'product_id' => 12,
            //     'size' => '0,2l',
            //     'quantity' => 10,
            // ],
           
        ]);

        // DB::table('feedback')->insert([
        //     [
        //         'product_id' => 1,
        //         'user_id' => 4,
        //         'email' => 'BrandonKelley@gmail.com',
        //         'name' => 'Brandon Kelley',
        //         'messages' => 'Nice !',
        //         'rating' => 4,
        //     ],
        //     [
        //         'product_id' => 1,
        //         'user_id' => 5,
        //         'email' => 'RoyBanks@gmail.com',
        //         'name' => 'Roy Banks',
        //         'messages' => 'Nice !',
        //         'rating' => 4,
        //     ],
        // ]);
    }
}


