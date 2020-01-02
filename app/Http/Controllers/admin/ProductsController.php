<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Product;
use App\model\Brand;
use App\model\Category;

class ProductsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->has('search') ? $request->search : "";
        $products = Product::where("name", 'LIKE','%'.$name.'%')->paginate(10);
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
            'desc'              =>  'required',
            'slug'              =>  'required',
            'brand_id'          =>  'required',
            'category_id'       =>  'required',
            'image'             =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'             =>  'required',
            'meta_title'        =>  'required',
            'meta_keywords'     =>  'required',
            'meta_description'  =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $product = array(
            'name'               =>   $request->name,
            'desc'               =>   $request->desc,
            'price'               =>   $request->price,
            'slug'               =>   $request->slug,
            'brand_id'           =>   $request->brand_id,
            'category_id'        =>   $request->category_id,
            'image'              =>   $new_name,
            'meta_title'         =>   $request->meta_title,
            'meta_keywords'      =>   $request->meta_keywords,
            'meta_description'   =>   $request->meta_description
        );

        Product::create($product);

        return redirect()->route('admin.products.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image)
        {
            $request->validate([
                'name'              =>  'required',
                'desc'              =>  'required',
                'slug'              =>  'required',
                'brand_id'          =>  'required',
                'category_id'       =>  'required',
                'price'             =>  'required',
                'image'             =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'meta_title'        =>  'required',
                'meta_keywords'     =>  'required',
                'meta_description'  =>  'required'
            ]);

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'              =>  'required',
                'desc'              =>  'required',
                'slug'              =>  'required',
                'price'             =>  'required',
                'brand_id'          =>  'required',
                'category_id'       =>  'required',
                'meta_title'        =>  'required',
                'meta_keywords'     =>  'required',
                'meta_description'  =>  'required'
            ]);
        }

        $form_data = array(
            'name'              =>   $request->name,
            'desc'              =>   $request->desc,
            'slug'              =>   $request->slug,
            'price'             =>   $request->price,
            'brand_id'          =>   $request->brand_id,
            'category_id'       =>   $request->category_id,
            'image'             =>   $image_name,
            'meta_title'        =>   $request->meta_title,
            'meta_keywords'     =>   $request->meta_keywords,
            'meta_description'  =>   $request->meta_description
        );

        Product::whereId($id)->update($form_data);

        return redirect()->route('admin.products.index')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.products.index')->with('success', 'Data is successfully deleted');
    }
}
