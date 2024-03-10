<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(){
        return view('auth.login');
    }


    public function register(){
        return view('auth.register');
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $user = new User();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request ->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'role_id' => 'required'
    ]);

    $user = new User();
    $user ->name =$request->input('name');
    $user ->email =$request->input('email');
    $user->password =bcrypt($request->input('password'));
    $user->role_id = 3;
    $user ->save();
    return redirect()->route('login');


    }

    public function loginUser(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

             if ($user->role_id == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('/');
            }
        }
        else{
            return redirect()->route('login');
        }

    }
    public function logout(){
        auth()->logout();
        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
