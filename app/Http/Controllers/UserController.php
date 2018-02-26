<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $showUsers = User::paginate(5);
        return view('users.index',['showUsers' => $showUsers]);
    }

    public function single($id){
        $showSingle = User::findOrFail($id);
        return view('users.single',['showSingle' => $showSingle]);
    }

    public function add()
    {
        return view('auth.register');
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect()->route('users');
    }

    public function edit($id)
    {
        $showUser = User::findOrFail($id);
        $showRole = User::all();
        return view('users.edit',['showUser' => $showUser, 'showRole' => $showRole]);
    }
}
