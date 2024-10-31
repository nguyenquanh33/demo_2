<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class ProductController extends Controller
{
    public function getAll(): View
    {
        $fullName = "Haha";
        $arrProduct = ["Air Blade", "Vision", "Vf3"];
        return view("pages.admin.ProductList2", [
            "fullName" => $fullName,
            "money" => 10000000000000,
            "arrProduct" => $arrProduct
        ]);
    }

    public function getAll2(Request $request): View
    {
        $status = $request->query("status");
        $cate_id = $request->query("cate");
        $category = DB::table("category")->where("status", 0)->get();

        if (!isset($cate_id)) {
            $listProduct = DB::table("products")->join("category", "products.category_id", "=", "category.id")->select("category.name as cate_name", "products.*")->get();
        } else {
            $listProduct = DB::table("products")->where("category_id", $cate_id)->join("category", "products.category_id", "=", "category.id")->where("products.category_id", "=", $cate_id)->select("category.name as cate_name", "products.*")->get();
        }

//        dd($listProduct);
        return view("pages.admin.ProductList2", [
            "listProduct" => $listProduct,

            "status" => $status,

            "cate_id" => $cate_id,
            "category" => $category
        ]);
    }

    public function getAll3(): View
    {

        return view("welcome");
    }

    public function delete($id)
    {
        DB::table("product")
            ->where("id", $id)
            ->delete();
        return redirect("/product-list2");

    }

    public function add()
    {
        return view("/ProductAdd");
    }

    public function save(Request $request)
    {
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $importedDate = date("Y-m-d H:i:s");
        $image = $request->image;

        DB::table("product")
            ->insert([
                "product_name" => $productName,
                "price" => $price,
                "description" => $description,
                "imported_date" => $importedDate,
                "image" => $image
            ]);

        return redirect("/product-list2");
    }

    public function edit($id)
    {
        $product = DB::table("product")
            ->where("id", $id)
            ->first();

        return view("ProductEdit", ["product" => $product]);

    }

    public function update(Request $request)
    {
        $id = $request->id;
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $image = $request->image;

        DB::table("product")
            ->where("id", $id)
            ->update([
                "product_name" => $productName,
                "price" => $price,
                "description" => $description,
                "image" => $image

            ]);

        return redirect("/product-list2");
    }
}
