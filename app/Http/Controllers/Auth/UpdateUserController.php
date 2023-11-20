<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function index(){
        $user = User::find(auth()->user()->id);
        return view('updateUser', ['user' => $user]);
    }

    public function update(Request $request){
        $user = User::find(auth()->user()->id)->update($request->all());

        if($user){
            return redirect()->back();
        }
    }
}
