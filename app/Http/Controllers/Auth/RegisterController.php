<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('registerUser');
    }

    public function register(Request $request){
        $data = $request->validate([
            'name'     => 'string|required',
            'email'    => 'string|required',
            'password' => 'string|required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if($user){
            Auth::login($user);
            return redirect()->route('list-files-page');
        }
    }
}
