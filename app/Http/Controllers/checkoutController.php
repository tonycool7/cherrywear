<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\category as category;

use App\product;

class checkoutController extends Controller
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
		return view('/checkout', $this->data);
	}
}
