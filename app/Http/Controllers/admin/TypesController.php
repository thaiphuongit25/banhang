<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Type;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->has('search') ? $request->search : "";
        $types = Type::where("name", 'LIKE','%'.$name.'%')->paginate(10);
        return view('admin.types.index', ['types' => $types]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
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
            'name'    =>  'required',
            'desc'     =>  'required',
            'slug'     =>  'required'
        ]);

        $type = array(
            'name'       =>   $request->name,
            'desc'       =>   $request->desc,
            'slug'       =>   $request->slug,
            'status'     =>   1
        );

        Type::create($type);

        return redirect()->route('admin.types.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.types.edit', compact('type'));
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
        $request->validate([
            'name'    =>  'required',
            'desc'    =>  'required',
            'slug'    =>  'required',
        ]);

        $form_data = array(
            'name'       =>   $request->name,
            'desc'       =>   $request->desc,
            'slug'       =>   $request->slug
        );

        Type::whereId($id)->update($form_data);

        return redirect()->route('admin.types.index')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = type::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.types.index')->with('success', 'Data is successfully deleted');
    }
}
