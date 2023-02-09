<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use App\Models\Category;
 
class CategoryController extends Controller
{
    public function index() 
    {
        //select * from categories where enabled = 1
        $categories = Category::All()->where('enabled', '=', 1);

        return view('categories/index', [
            'categories' => $categories
        ]);
    }
 
    public function show($id): Response
    {
        // throw new \Exception('could not found');
        // $id = 1;
        if ($id ==1) {
            return response()->view('categories/show');
        }
        // echo 'Category Controller method: show' . $id;
        // return view('categories/show');
        return response()->view('categories/error', [], status: 404);
    }

    public function store(Request $request): View
    {
        if ($request->isMethod('post')) {
            $name = $request->post('full_name');
 
            return view('categories/store', [
                'name' => $name
            ]);
        }
 
        return view('categories/store');
    }
    public function json(): JsonResponse
    {
    return response()->json(
        [
        'product_name' => 'TV',
        'price'=> 333
        ]
        );
    }
}