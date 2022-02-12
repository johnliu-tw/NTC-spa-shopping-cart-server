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
        for ($i=1; $i < 13; $i++) {
            DB::table('products')->insert([
                'user_id' => $i,
                'brand' => "Oreilly",
                'category' => 'book',
                'name' => 'API Design Cookbook',
                'img_path' => '/product0.png',
                'price' => 500,
                'quantity' => 100,
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum, tortor quis accumsan consequat, felis velit interdum arcu, ut finibus libero augue id orci. Fusce auctor tortor vel nunc tincidunt blandit. Proin eleifend, orci eget commodo hendrerit, diam diam facilisis mi, eu aliquam mi nibh id orci. Nullam vulputate imperdiet augue, vel eleifend est. Nulla eu quam sit amet tortor ultricies vulputate. Ut volutpat vehicula mauris at accumsan. Ut pulvinar interdum aliquam. Etiam tortor sem, venenatis id commodo vel, ullamcorper non neque. Nullam vehicula fermentum nisi eget egestas. Cras malesuada eu leo nec faucibus. Ut non ligula libero. Phasellus eu nulla sed massa egestas sagittis nec at massa. Nullam rutrum dictum sollicitudin. Duis vel fringilla enim, et placerat tortor.'
            ]);
            DB::table('products')->insert([
                'user_id' => $i,
                'brand' => "Oreilly",
                'category' => 'book',
                'name' => 'Vue Js 3',
                'img_path' => '/product1.png',
                'price' => 350,
                'quantity' => 100,
                'desc' => 'Aliquam viverra erat elit, vitae venenatis nibh consequat feugiat. Vivamus tristique, tortor quis porttitor tincidunt, ex nisl imperdiet nibh, venenatis commodo turpis sem eu eros. Curabitur suscipit eros eu sodales pellentesque. Curabitur laoreet purus in magna posuere, aliquam vehicula est commodo. Morbi mollis bibendum aliquam. Vivamus molestie eros erat, ac blandit lorem iaculis ac. Nullam eget sapien elit. Nam at lectus eget ante condimentum sodales.'
            ]);
            DB::table('products')->insert([
                'user_id' => $i,
                'brand' => "Oreilly",
                'category' => 'book',
                'name' => 'Website Developement Guideline',
                'img_path' => '/product2.png',
                'price' => 666,
                'quantity' => 100,
                'desc' => 'Donec egestas rutrum ipsum, eget aliquet tellus tincidunt sit amet. Nullam dignissim a turpis eu laoreet. Vivamus eu erat ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam at suscipit purus. Duis ullamcorper ante feugiat quam feugiat, eget egestas nibh dignissim. Suspendisse pellentesque elit quis sapien venenatis scelerisque. Donec in dui odio. Morbi eleifend ornare nunc, in convallis quam gravida ut. Ut pellentesque mattis erat, sit amet dignissim metus porttitor et. Proin in feugiat dui. Phasellus laoreet, lacus id consectetur fermentum, metus dolor laoreet eros, vitae placerat dui augue vitae turpis.'
            ]);
            DB::table('products')->insert([
                'user_id' => $i,
                'brand' => "Oreilly",
                'category' => 'sundries',
                'name' => 'Bookmark',
                'img_path' => '/product3.jpeg',
                'price' => 120,
                'quantity' => 20,
                'desc' => 'A bookmark'
            ]);
            DB::table('products')->insert([
                'user_id' => $i,
                'brand' => "Amazon",
                'category' => 'book',
                'name' => 'Reading is perfect',
                'img_path' => '/product4.jpeg',
                'price' => 345,
                'quantity' => 50,
                'desc' => 'Nunc tellus sem, maximus non pellentesque a, faucibus quis eros. Suspendisse egestas accumsan nisl quis lobortis. Etiam fringilla leo eget nisl ultrices, ac auctor velit varius. Vivamus eget elit fringilla, malesuada massa vitae, vestibulum elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. In vel erat sed ante pulvinar sollicitudin. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla ac fringilla orci, eu cursus nisi. Cras imperdiet, magna sed commodo lacinia, tellus massa pretium neque, vel faucibus nibh neque ut nisl. Morbi viverra hendrerit ipsum. Nullam sed elit nec nisl porttitor ultricies ut non sem. Praesent ante arcu, maximus id tellus ut, scelerisque fringilla est. Fusce vestibulum, neque non ullamcorper faucibus, orci lorem sodales turpis, at tincidunt velit arcu vitae ex. Mauris ex lacus, efficitur in arcu non, vestibulum pellentesque lorem.'
            ]);
            DB::table('products')->insert([
                'user_id' => $i,
                'brand' => "Amazon",
                'category' => 'food',
                'name' => 'Water',
                'img_path' => '/product5.jpeg',
                'price' => 30,
                'quantity' => 8,
                'desc' => 'A bottle of water'
            ]);
        }
    }
}
