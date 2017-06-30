<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category as category;

use App\product;

use App\Http\Requests;

class cartController extends Controller
{
	public $data = array();

	public function __construct(){
		$categoryObj = category::all();
		$this->data = array(
            "category" => $categoryObj,
            "products" => product::all()
        );
	}

    public function index(){
    	return view('cart', $this->data);
    }

    public function addtocart(){
    	return view('/logic/addtocart');
    }

    public function delete(){
        return view('/logic/deletefromcart');
    }
    
}
