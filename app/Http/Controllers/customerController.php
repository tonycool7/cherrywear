<?php

namespace App\Http\Controllers;

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

    // public function login(){
    // 	if(Input::has("password") && Input::has("email")){
    // 		$password = Input::get("password");
    // 		$email = Input::get("email");
    // 		if($user = customer::where('email', $email)->get()->first()){
    // 			if (Hash::check($password, $user->password))
				// {
				//     session(['login' => 'true','user' => $user->name, 'email' => $user->email, 'phone' => $user->telephone, 'address' => $user->address]);
				// }
    // 		}
    // 	}
    // 	return redirect()->back();
    // }

    public function register(){
    	$customer = new customer;
    	if(Input::has("name2") && Input::has("email2") && Input::has("tel") && Input::has("password2") && Input::has("password_confirmation")){
    		$customer->name = Input::get("name2");
    		$customer->email = Input::get("email2");
    		$customer->telephone = Input::get("tel");
            $customer->address = "";
    		if(Input::get("password2") == Input::get("password_confirmation")){
    			$customer->password = bcrypt(Input::get("password2"));
    		}
    		$customer->save();
    		session(['register' => 'true']);
    	}
    	return redirect()->back();
    }


    public function addAddress(){
        $user = customer::where("email", session('email'))->first();
        $user->address = Input::get('address');

        $user->save();

        session(['address' => Input::get('address')]);

        return redirect()->back();
    }

}
