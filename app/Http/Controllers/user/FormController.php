<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormOneRequest;
use App\Http\Requests\FormTwoRequest;
use App\Http\Requests\FormThreeRequest;
use App\Models\User;

class FormController extends Controller
{
    //return view for user
    public function formOne(){
        $id = auth()->id();
        $user = User::find($id);
        $data = $user->data()->first();
        if($user->data()->count()=='1'){
            $fname = $data->first_name; 
            $lname = $data->last_name;
            
        }else{
            $fname = $lname = '';
        }
        return view('form.one',compact('fname','lname'));
    }

    public function formTwo(){
        $id = auth()->id();
        $user = User::find($id);
        $data = $user->data()->first();
        $email = $data->email;
        $passport_id = $data->number_passport;
        return view('form.two',compact('email','passport_id'));
    }

    public function formThree(){
        $id = auth()->id();
        $user = User::find($id);
        $data = $user->data()->first();
        $status = $data->status;
        $age = $data->age;
        return view('form.three',compact('status','age'));
    }

    //retrive data and validate for save
    public function formOneStore(FormOneRequest $request){
        $id = auth()->id();
        $user = User::find($id);
        $user->data()->updateOrCreate(['user_id'=>$id],[
            'first_name'=>$request->fname, 
            'last_name'=>$request->lname, 
            'step'=>'1'
        ]);
        return redirect('/form_two');
    }

    public function formTwoStore(FormTwoRequest $request){
        $id = auth()->id();
        $user = User::find($id);
        $user->data()->updateOrCreate(['user_id'=>$id],[
            'email'=>$request->email, 
            'number_passport'=>$request->passport_id, 
            'step'=>'2'
        ]);
        return redirect('/form_three');
    }

    public function formThreeStore(FormThreeRequest $request){
        $id = auth()->id();
        $user = User::find($id);
        $user->data()->updateOrCreate(['user_id'=>$id],[
            'status'=>$request->status, 
            'age'=>$request->age,
            'step'=>'3'
        ]);
        return redirect('/sure_page');
    }
}
