<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        		'imagepath' => 'logo13.jpg',
        		'title' => 'Harry Poter',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.',
        		'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        		'imagepath' => 'logo13.jpg',
        		'title' => 'Super Man',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.',
        		'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        		'imagepath' => 'logo13.jpg',
        		'title' => 'Bat Man',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.',
        		'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        		'imagepath' => 'logo13.jpg',
        		'title' => 'Irom Man',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.',
        		'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        		'imagepath' => 'logo13.jpg',
        		'title' => 'Gun Man',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.',
        		'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        		'imagepath' => 'logo13.jpg',
        		'title' => 'Modon Man',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.',
        		'price' => 10
        	]);
        $product->save();
    }
}