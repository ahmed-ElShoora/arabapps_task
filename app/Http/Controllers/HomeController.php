<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->id();
        $user = User::find($id);
        $count = $user->data()->count();
        if($count == 0){
            $step = '0';
        }else{
            $step = $user->data()->first()->step;
        }
        return view('home',compact('count','step'));
    }
}
