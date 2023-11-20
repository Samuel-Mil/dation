<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class CreateFileController extends Controller
{
    public function index(){
        return view('createFile');
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'date' => 'string|required',
        ]);

        $file = Files::create($request->all());

        if($file){
            return redirect()->route('list-files-page');
        }
    }

    public function show(Request $request, $id){
        $file = Files::find($id);
        return view('file', ['file'=>$file]);
    }
}
