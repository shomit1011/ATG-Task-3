<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function register() {
        return view('auth.register');
    }

    function save(request $request) {

        // Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:8|max:16',
        ]);

        // Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save) {
            return back()->with('success', 'New user has been successfully added to the database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    function check(Request $request) {
        
        // Validate requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:16',
        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();

        if(!$userInfo) {
            return back()->with('fail', 'Email not found, try another one');
        } else {
            // check password

            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Incorrect Password');
            }
        }
    }

    function logout() {
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard() {

        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];

        return view('admin.dashboard', $data);
    }
}
