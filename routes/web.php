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

Route::get('/log', function(){
    if(!empty(Input::get('mail')) && !empty(Input::get('pword'))){
        $password = Input::get('pword');
        $email = Input::get('mail');
        $user = customer::where("email", $email)->first();
        if (Illuminate\Support\Facades\Hash::check($password, $user->password))
        {
            session(['login' => 'true','user' => $user->name, 'email' => $user->email, 'phone' => $user->telephone, 'address' => $user->address]);
            print "true";
        }
        }else{
            print "false";
        }
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

