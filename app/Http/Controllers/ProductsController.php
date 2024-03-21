<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(){
        $products = [
            [
                'description' => 'Banana',
                'category' => 'Fruits',
                'price' => 2.90,
            ],
            [
                'description' => 'Apple',
                'category' => 'Fruits',
                'price' => 1.50,
            ],
            [
                'description' => 'Milk',
                'category' => 'Dairy',
                'price' => 3.25,
            ],
            [
                'description' => 'Bread',
                'category' => 'Bakery',
                'price' => 2.00,
            ],
            [
                'description' => 'Eggs',
                'category' => 'Dairy',
                'price' => 1.80,
            ],
            [
                'description' => 'Chicken',
                'category' => 'Meat',
                'price' => 6.50,
            ],
        ];
        
        return view('showProducts')->with('products', $products);
    }
}
