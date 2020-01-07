<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Information;

class InformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::all();
        return view('admin.informations.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.informations.create');
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
            'title'     =>  'required',
            'content'   =>  'required',
            'thumbnail' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $thumbnail = $request->file('thumbnail');

        $new_name = time().'.'.$thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('images'), $new_name);
        $information = array(
            'title'            =>   $request->title,
            'content'          =>   $request->content,
            'slug'             =>   $request->slug,
            'thumbnail'        =>   $new_name,
            'meta_title'       =>   $request->meta_title,
            'meta_keywords'    =>   $request->meta_keywords,
            'meta_description' =>   $request->meta_description
        );

        Information::create($information);

        return redirect()->route('admin.informations.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information = Information::findOrFail($id);
        return view('admin.informations.edit', compact('information'));
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
        $image = $request->file('logo');
        if($image)
        {
            $request->validate([
                'title'     =>  'required',
                'content'   =>  'required',
                'slug'      =>  'required|unique:informations',
                'thumbnail' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'content'  =>  'required',
                'slug'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'            =>   $request->title,
            'content'          =>   $request->content,
            'slug'             =>   $request->slug,
            'thumbnail'        =>   $image_name,
            'meta_title'       =>   $request->meta_title,
            'meta_keywords'    =>   $request->meta_keywords,
            'meta_description' =>   $request->meta_description
        );

        Information::whereId($id)->update($form_data);

        return redirect()->route('admin.informations.index')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Information::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.informations.index')->with('success', 'Data is successfully deleted');
    }
}
