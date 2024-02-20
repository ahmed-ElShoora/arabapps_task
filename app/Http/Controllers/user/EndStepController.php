<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class EndStepController extends Controller
{
    public function index(){
        $id = auth()->id();
        $user = User::find($id);
        $data = $user->data()->first();
        return view('submition.index',compact('data'));
    }

    public function end(){
        $id = auth()->id();
        $user = User::find($id);
        $user->data()->updateOrCreate(['user_id'=>$id],[
            'step'=>'4'
        ]);
        Session::flash('notification', 'You Sign Suc : Task 13.');
        return redirect('/home');
    }
}
