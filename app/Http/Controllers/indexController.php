<?php

namespace App\Http\Controllers;

use App\customer;
use App\Mail\orderAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;

use App\orders;

use App\slides;

use App\category as category;

use App\product;

class indexController extends Controller
{
    public $data = array();

    function __construct(){
        $categoryObj = category::all();
        $product = product::where('quantity', '<>', '0')->orderBy('id', 'desc')->take(10)->groupBy('name')->groupBy('color')->get();
        $this->data = array(
            "category" => $categoryObj,
            "product" => $product,
            "orders" => '',
            "slides" => slides::all(),
            "firstslide" => slides::first(),
            "slideCount" => slides::count()
        );
    }

    function __destruct(){

    }

    public function index(){
    	return view('index', $this->data);
    }

    public function account(){
        return view('account', $this->data);
    }

    public function personal(){
        return view('personalinfo', $this->data);
    }

    public function orders(){
        $orders = orders::where('user_id', '=', session('email'))->get();
        $this->data['orders'] = $orders;
        return view('order', $this->data);
    }

    public function orderSuccess(){
        $id = customer::where('email', session('email'))->first()->id;
        $orders = orders::where('user_id', '=', $id)->get();
        Mail::send(new orderAlert($orders));
        return view('ordersuccess', $this->data);
    }

}
