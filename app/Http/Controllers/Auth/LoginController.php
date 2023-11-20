<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email'    => 'string|required',
            'password' => 'string|required',
        ]);

        $user = User::where('email', $data['email'])->first();

        // Validar senha 
        if(!$user || !Hash::check($data['password'], $user['password'])){
            return redirect()->route('register-page');
        }

        Auth::login($user);

        return redirect()->route('list-files-page');
    }

    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect()->route('login');
    }
}
