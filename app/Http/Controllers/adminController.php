<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\category as category;

use App\product;

use App\colors;

use App\slides;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
	public $data;

	public function __construct(){
		$this->middleware('auth');
		$category = category::all();
		$this->data = array(
            "color" => colors::all(),
    		"category" => $category,
    		"successMsg" => "",
            "incompleteForm" => "",
            "product" => product::all(),
            "colorAddedSuccess" => "",
            "colorNotAdded" => "",
            "deleteSuccess" => "",
            "slides" => slides::all(),
            "slideError" => "",
            "slideSucc" => "",
            "slideDeleted" => ""
    	);
	}

    public function index(){
    	return view('admin', $this->data);
    }

    public function addProduct(){
    	$product = new product;

        if (Input::has('name') && Input::has('descr') && request()->hasFile('image') && Input::has('category')&& Input::has('details') && Input::has('subcategory') && Input::has('newprice') && Input::has('size') && Input::has('color')){
            $product->name = Input::get('name');
            $product->description = Input::get('descr');
            $product->category = Input::get('category');
            $product->subcategory_id = Input::get('subcategory');
            $product->new_price = Input::get('newprice');
            $product->details = Input::get('details');
            $product->color = Input::get('color');
            $product->size = Input::get('size');
            $product->quantity = Input::get('qty');
            if (request()->file('image')->isValid()) {
                $name = Input::file('image')->getClientOriginalName();
                request()->file('image')->storeAs('uploads', $name);
                copy(storage_path('app/uploads/').$name, "images/products/".$name);
                $product->image = $name;
            }
        }else{
            $this->data['incompleteForm'] = "Please fill all fields";
            return view("admin", $this->data);
        }

    	if($product->save()){
    		$this->data['successMsg'] = "Product Successfully added";
            $this->data['product'] = product::all();
    	}

    	return view("admin", $this->data);
    }

    public function addSlide(){
        $slide = new slides;

        if(request()->hasFile('slide')){
            if (request()->file('slide')->isValid()) {
                $name = Input::file('slide')->getClientOriginalName();
                request()->file('slide')->storeAs('uploads', $name);
                copy(storage_path('app/uploads/').$name, "images/slides/".$name);
                $slide->image = $name;
                if($slide->save()){
                    $this->data['slideSucc'] = "Slide Successfully added";
                    $this->data['slides'] = slides::all();
                }
            }
        }else{
            $this->data['slideError'] = "Slide not uploaded";
            return view("admin", $this->data);
        }
        return view("admin", $this->data);
    }

    public function addColor(){
        if(Input::has('newcolor')){
            $color = new colors;
            $color->name = Input::get('newcolor');
            if($color->save()){
                $this->data['colorAddedSuccess'] = "Color Successfully added";
            }
            $this->data['color'] = colors::all();
        }else{
            $this->data['colorNotAdded'] = "Color not added or already exists";
        }
        return view("admin", $this->data);
    }

    public function deleteProduct($id){
        product::where("id", "=", $id)->delete();
        $this->data['deleteSuccess'] = "Product Successfully deleted";
        $this->data["product"] = product::all();
    	return view("admin", $this->data);
    }

    public function deleteSlide($id){
        $name = slides::where('id', $id)->get()->first();
        slides::where("id", "=", $id)->delete();
        shell_exec('rm images/slides/'.$name->image);
        Storage::delete($name->image);
        $this->data['slideDeleted'] = "Slide Successfully deleted";
        $this->data['slides'] = slides::all();
        return view("admin", $this->data);
    }

    public function deleteProductFromSystem(){
        $name = product::where('id', $id)->get()->first();
        shell_exec('rm images/products/'.$name->image);
        Storage::delete($name->image);
        product::where("id", "=", $id)->delete();
        $this->data['deleteSuccess'] = "Product deleted Successfully";
        return view("admin", $this->data);
    }
}
