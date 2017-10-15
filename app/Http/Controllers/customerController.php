<?php

namespace App\Http\Controllers;

use App\subscription;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\customer;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{
    public function __construct(){
    }

    public function index(){

    }

    public function register(Request $request){
        if($request->password1 != $request->password2){
            return "false";
        }
        $dataRequest = $request->all();
        $dataRequest['password'] = bcrypt($request->password1);
        if($request->news == "true"){
            subscription::create($dataRequest);
        }
        customer::create($dataRequest);
    	return "true";
    }


    public function addAddress(){
        $user = customer::where("email", session('email'))->first();
        $user->address = Input::get('address');

        $user->save();

        session(['address' => Input::get('address')]);

        return redirect()->back();
    }

}
