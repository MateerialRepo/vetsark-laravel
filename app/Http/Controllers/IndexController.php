<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('MyPages/Index');
    }


    public function allUsers()
    {
        $listOfUsers = User::all();
        dd($listOfUsers);
    }


    public function allBlogPosts()
    {
        $listOfBlogs = Blog::all();
        dd($listOfBlogs);
    }


    public function register(){

        return Inertia::render('MyPages/Register');
    }


    public function addUser(Request $req){

        $req->validate([
            'name' => 'required|string' ,
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
            
        ]);
        
        //save into user table
        $user = new User;
        $user->name = $req->input('firstname')." ".$req->input('lastname');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->password);
        $user->save();

        $req->session()->flash('status', 'User Successfully added');
        return Inertia::render('MyPages/Index');
    }

}
