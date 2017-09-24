<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\category as category;

use Illuminate\Support\Facades\DB;

class shopController extends Controller
{
	public $data = array();
	public $allowedCategories = array();
	public $allowedSubCategories = array();

	public function __construct(){
		$this->allowedCategories = array("Мужчина" => "men", "Женшина" => "women", "Дети" => "kids", "Новинки" => "highlights");
		$categoryObj = category::all();
        $color = DB::table('product')->select('color')->groupBy('color')->get();
		foreach ($categoryObj as $value) {
			array_push($this->allowedSubCategories, $value->name);
		}
        $this->data = array(
            "category" => $categoryObj,
            "category_name" => "",
            "sub_category_name" => "",
            "mainCategory" => "",
            "product" => "",
            "categorizedProducts" => "",
            "subCategorizedProducts" => "",
            "color" => $color,
            "productbyColor" => "",
            "dontshowcategory" => ""
        );
	}
	
    public function index(){
        $product = DB::table('product')->where('quantity', '<>', '0')->groupBy('name')->groupBy('color')->get();
        $this->data['product'] = $product;
        $this->data['mainCategory'] = $this->allowedCategories;
    	return view('shop', $this->data);
    }

    public function category($cat){
    	if(in_array(strtolower($cat), $this->allowedCategories)){
    		$this->data['category_name'] = ucfirst($cat);
            $categorizedProducts = DB::table('product')->where('category', '=', $cat)->where('quantity', '<>', '0')->groupBy('name')->groupBy('color')->get();
            $this->data['categorizedProducts'] = $categorizedProducts;
    	}else{
            $this->data['mainCategory'] = $this->allowedCategories;
            $products = DB::table('product')->where('color', '=', $cat)->groupBy('name')->groupBy('color')->get();
            $this->data['productbyColor'] = $products;
        }
        
    	return view('shop', $this->data);
    }

    public function subCategory($cat, $subCat){
     	if(in_array(strtolower($cat), $this->allowedCategories)){
    		$this->data['category_name'] = ucfirst($cat);
    	}
    	if(in_array($subCat, $this->allowedSubCategories)){
    		$this->data['sub_category_name'] = ucfirst($subCat);
            $subCategorizedProducts = DB::table('product')->where('category', '=', $cat)->where("subcategory_id", "=", DB::table('categories')->select('id')->where("name", "=", $subCat)->get()[0]->id)->where('quantity', '<>', '0')->groupBy('name')->groupBy('color')->get();
            $this->data['subCategorizedProducts'] = $subCategorizedProducts;
    	}else{
            $products = DB::table('product')->where('category', '=', $cat)->where('color', '=', $subCat)->groupBy('name')->groupBy('color')->get();
            $this->data['productbyColor'] = $products;
        }
        
        return view('shop', $this->data);
    }

    public function subcatfiltercolor($cat, $subCat, $color){
        if(in_array(strtolower($cat), $this->allowedCategories)){
            $this->data['category_name'] = ucfirst($cat);
        }
        if(in_array($subCat, $this->allowedSubCategories)){
            $this->data['sub_category_name'] = ucfirst($subCat);
            $subCategorizedProducts = DB::table('product')->where('category', '=', $cat)->where("subcategory_id", "=", DB::table('categories')->select('id')->where("name", "=", $subCat)->get()[0]->id)->where('color', '=', $color)->where('quantity', '<>', '0')->groupBy('name')->groupBy('color')->get();
            $this->data['subCategorizedProducts'] = $subCategorizedProducts;
        }

        return view('shop', $this->data);
    }

}
