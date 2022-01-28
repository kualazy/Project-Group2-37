<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.admin.users.index')->with('users',User::get());
    }

    public function add()
    {
        return view('admin.admin.users.adduser');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.admin.users.edituser', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {

        $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/users', $image_name);
        $path = '/storage/users/' . $image_name;

        User::create([
            'name' => $request->name,
            'address'=> $request->address,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'isAdmin' => $request->admin,
            'image' => $path
        ]);

        return redirect()->route('admin.user');
    }

    public function update(Request $request, $id)
    {


        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'address'=> $request->address,
            'email'=> $request->email,
            'isAdmin' => $request->admin,
            'phone'=> $request->phone,
        ]);

        if ($request->file('image')) {
            $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/public/users', $image_name);
            $path = '/storage/users/' . $image_name;

            $user->update([
                'image' => $path
            ]);
        }

        return redirect()->route('admin.user');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
