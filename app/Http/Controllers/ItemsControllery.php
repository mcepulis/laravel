<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsControllery extends Controller
{
    public function index() 
    {
    //    return view('items/index', ['name' => 'Kriause', 'items' => 5]);
    $preke1 = ['id' => 1,
    'name' => "Obuolys",
    'price' => 1.29
    ];

    $preke2 = [
        'id' => 2,
        'name' => "Bananas",
        'price' => 1.79
    ];

    return view('items/index', ['prekes' => [$preke1, $preke2]]  
                );
        
    }
    


    public function show($name, $price)
    {
        return view('items/show', [
        'id' => 1,
		'name' => $name,
		'price' => $price
        ]);
    }
}
