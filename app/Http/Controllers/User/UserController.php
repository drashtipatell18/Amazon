<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user(){
        $users = User::all();
        return view('user.view_user',compact('users'));
    }

    public function userCreate(){
        return view('user.create_user');
    }

    public function userInsert(Request $request ){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'password' => 'required',
        ]);

        $filename = '';
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images', $filename);
        }
       
        $user = User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'phone'     => $request->input('phone'),
            'gender'     => $request->input('gender'),
            'status'     => $request->input('status'),
            'password'  => $request->input('password'),
            'image'     => $filename, 
        ]);

        session()->flash('success', 'User added successfully!');
        return redirect()->route('user');
    }

    public function userEdit($id){
        $users = User::find($id);
        return view('user.create_user', compact('users'));
    }

    public function userUpdate(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'status' => 'required',
        ]);

        $users = User::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images', $filename);
            $users->image = isset($filename) ? $filename : null;
        }

        $users->update([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'phone'     => $request->input('phone'),
            'gender'     => $request->input('gender'),
            'status'     => $request->input('status'),
         ]);

        session()->flash('success', 'User Update successfully!');
        return redirect()->route('user');
    }

    public function userDestroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
        session()->flash('danger', 'User Delete successfully!');
    }
}