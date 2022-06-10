<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[  
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){

        $validData = $request->validate([
            'name' => 'required|max:225',
            'username' => ['required','min:3','max:225','unique:users'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:5','max:225'],
        ]);

        $validData['password'] = bcrypt($validData['password']);
        // $validData['password'] = Hash::make($validData['password']);

        $request->session()->flash('Success','Registration Succesfully! Please login');

        User::create($validData);

        return redirect('/login')->with('success','Registration Succesfully! Please login');
        
    }
}
