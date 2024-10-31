<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getAll()
    {
        $category = DB::table('category')
            ->join('products', 'category.id', '=', 'products.category_id')
            ->select("category.name", "category.id", "category.status", DB::raw('COUNT(products.id) as total_products'))
            ->groupBy('category.id', 'category.name', 'category.status')
            ->get();
//        dd($category);

        return view('pages.admin.CategoryList', ['ListCategory' => $category]);
    }

    public function add()
    {
        return view('pages.admin.CategoryAdd');
    }
}

{

}
