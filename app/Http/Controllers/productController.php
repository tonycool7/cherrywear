<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\category as category;

use App\product as product;

class productController extends Controller
{
	public $data = array();

    public function __construct(){
    	$this->data = array(
    		'category' => category::all(),
    		'product' => ''
    	); 
    }

    public function index($id){
    	$this->data['product'] = product::where('id', $id)->get()->first();
    	return view('product', $this->data);
    }
}
