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

    public function show($id)
    {
        $user = User::customer()->findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    public function admins(){

    }

    public function edit_role(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function change_password(){
        
    }
}
