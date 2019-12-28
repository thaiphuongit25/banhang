<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Type;
use App\model\Product;
use App\model\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('products.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function showCategories($slug)
    {
        $categor = Category::where('slug', $slug)->first();
        $categories = Category::all();
        if (!$categor) {
            $type = Type::where('slug', $slug)->first();
            $categories = Category::where("type_id", $type->id);
            return view("products.types", compact("type", "categories"));
        } else {
            return view("products.categories", compact("categor", "categories"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();
        return view("products.show", compact("product", "categories"));
    }
}
