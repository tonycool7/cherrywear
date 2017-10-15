<?php

use Illuminate\Support\Facades\Input;
use App\customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'indexController@index');

Route::get('shop', 'shopController@index');

Route::get('shop/{cat}', 'shopController@category');

Route::get('shop/{cat}/{subCat}', 'shopController@subCategory');

Route::get('shop/{cat}/{subCat}/{color}', 'shopController@subcatfiltercolor');

Auth::routes();

Route::get('/admin', 'adminController@index');

Route::post('/admin/add', 'adminController@addProduct');

Route::post('/admin/addSlide', 'adminController@addSlide');

Route::post('/admin/addColor', 'adminController@addColor');

Route::post('/admin/add_to_lookbook', 'adminController@addToLookbook');

Route::get('/admin/delete/{id}', 'adminController@deleteProduct');

Route::get('/cart', 'cartController@index');

Route::get('/product/{id}', 'productController@index');

Route::get('/addtocart', 'cartController@addtocart');

Route::get('/deletefromcart', 'cartController@delete');

Route::get('/checkout', 'checkoutController@index');

Route::post('/reg', 'customerController@register');

Route::get('/logout', function(){
	return view('/logic/logout');
});

Route::get('/deleteitem/{id}', 'adminController@deleteProduct');

Route::get('/deleteslide/{id}', 'adminController@deleteSlide');

Route::get('/account','indexController@account');

Route::get('/personalinfo','indexController@personal');

Route::post('/address','customerController@addAddress');

Route::get('/orders','indexController@orders');

Route::get('/complete', 'indexController@orderSuccess');

Route::post('/log', function(\Illuminate\Http\Request $request){
    $user = customer::where('email', $request->mail)->first();
    if(!is_null($user)){
        $password = $request->pword;
        $email = $request->mail;
        if (Illuminate\Support\Facades\Hash::check($password, $user->password))
        {
            session(['login' => 'true','user' => $user->name, 'email' => $user->email, 'phone' => $user->telephone, 'address' => $user->address]);
            return "true";
        }else{
            return "false";
        }
    }

    return "false";
    //    if(!empty(Input::get('mail')) && !empty(Input::get('pword'))){
//        $password = Input::get('pword');
//        $email = Input::get('mail');
//        $user = customer::where("email", $email)->first();
//        if (Illuminate\Support\Facades\Hash::check($password, $user->password))
//        {
//            session(['login' => 'true','user' => $user->name, 'email' => $user->email, 'phone' => $user->telephone, 'address' => $user->address]);
//            print "true";
//        }
//        }else{
//            print "false";
//        }
});

Route::get('/ordered', function(){
	return view('/logic/order');
});

Route::get('/subscribe', function(){
	return view('/logic/subscribe');
});

Route::get('/view', function (){
     dd(\App\product::where('id', 9)->first()->subproducts);

     return "das";
});

Route::get('/lookbook', function(){
    $category = \App\category::all();
    $lookbook = \App\lookbook::all();
    return view('lookbook', ['category' => $category, 'lookbook' => $lookbook]);
});

Route::get('/deletelookbookitem/{id}', 'adminController@deletelookbookItem');

Route::get('/about', function (){
    $category = \App\category::all();
    return view('about', compact('category'));
});


Route::get('/edit/{id}', 'adminController@editItem');

Route::post('/save_edit/{id}', 'adminController@saveEdit');


Route::get('/admin_reg', 'Auth\\RegisterController@register');

Route::get('/admin_reg_view', function (){
    return view('reg');
});

Route::get('/delivery_return', function (){
    $category = \App\category::all();
    return view('delivery_return', compact('category'));
});

Route::get('/size_manual', function (){
    $category = \App\category::all();
    return view('size_manual', compact('category'));
});

Route::post('/newsletter', 'adminController@newsletter');

Route::get('/send', 'indexController@orderSuccess');