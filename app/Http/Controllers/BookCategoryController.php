<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class BookCategoryController extends Controller
{

        public function index(): View
        {
            $categories = category::all();
            foreach ($categories as $item)
            {
                var_dump($item->name);
                var_dump($item->enabled);
            }
            return view('category', [
                'name' => $item,
                ]);
        }



    public function show()
    {

    }
}
