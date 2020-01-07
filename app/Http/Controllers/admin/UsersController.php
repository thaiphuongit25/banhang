<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::customer()->orderBy('id', 'desc')->get();
        return view('admin.users.index', compact('users'));
    }

    public function admins(){

    }

    public function edit_role(){

    }

    public function edit($id){
        $user = User::customer()->findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'is_admin' => 'required'
        ]);
        $form_data = array(
            'is_admin' => $request->is_admin
        );
        User::whereId($id)->update($form_data);

        return redirect()->route('admin.users.index')->with('success', 'Data Updated successfully.');
    }

    public function delete(){

    }

    public function change_password(){
        
    }
}
