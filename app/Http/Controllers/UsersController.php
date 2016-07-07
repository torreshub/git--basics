<?php
        
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index')->with('users', $users);
    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        return redirect('users');
    }
}