<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class democontroller extends Controller
{
    public function demo()
    {
        $demoArray = [
            [
                'name' => 'Item 1',
                'description' => 'This is the first item.',
                'price' => 19.99,
            ],
            [
                'name' => 'Item 2',
                'description' => 'This is the second item.',
                'price' => 29.99,
            ],
            [
                'name' => 'Item 3',
                'description' => 'This is the third item.',
                'price' => 15.33,
            ],
        ];

        return view('demo', compact('demoArray'));
    }
}
