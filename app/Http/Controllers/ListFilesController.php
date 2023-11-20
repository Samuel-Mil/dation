<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class ListFilesController extends Controller
{
    public function index()
    {
        return view('listFiles', [
            'files' => Files::get(),
        ]);
    }
}
