<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class PlannerController extends Controller
{
    public function index(){
        $planners = Financial::get();
        return view('planner', [
            'planners'=>$planners,
            'total'=>Financial::sum('price')
        ]);
    }

    public function create(){
        return view('createPlanner');
    }

    public function register(Request $request){
        $request->validate([
            'date' => 'string|required',
            'description' => 'string|required',
            'price' => 'string|required',
        ]);

        $planner = Financial::create($request->all());

        if($planner){
            return redirect()->route('planner-page');
        }
    }
}
