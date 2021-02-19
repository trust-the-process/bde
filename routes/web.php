<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//use Illuminate\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();
Route::view('/', 'welcome');

Route::view('/shop2', 'shop2');

Route::view('/gallery', 'gallery');

// Menu footer

Route::view('/faq', 'faq');

Route::view('/terms', 'terms');

// Sous-menu de activite
Route::view('/charte', 'charte');

Route::view('/idea', 'idea');

Route::view('/c_sport', 'c_sport');

Route::view('/c_music', 'c_music');

Route::view('/c_tech', 'c_tech');

Route::view('/c_church', 'c_church');

// Sous-menu du shop
Route::view('/shop', 'shop');

Route::view('/cart', 'cart');

Route::view('/checkout', 'checkout');


// Autres pages
Route::view('/about', 'about');

Route::view('/news', 'news');

Route::view('/events', 'events');

Route::get('/detail_event/{id}', 'UserController@detail_event')->name('detail_event');

Route::get('/detail_activity/{id}', 'UserController@detail_activity')->name('detail_activity');

Route::get('/specific_activity/{club}', 'UserController@specific_activity')->name('specific_activity');

Route::view('/contact', 'contact');

Route::view('/home_winkel', 'home_winkel');



Route::group(['middleware' => ['auth', 'boss']], function(){


    Route::get('/add_product','dashboard_controller@add_product')->name('admin.add_product');

    Route::get('/list_product','dashboard_controller@list_product')->name('admin.list_product');

    Route::post('/form_add_product', 'dashboard_controller@form_add_product')->name('form_add_product');

    Route::get('/search_product', 'dashboard_controller@search_product')->name('search_product');

    Route::get('/search','dashboard_controller@search')->name('search');    

    Route::get('/edit_product/{id}', 'dashboard_controller@edit_product')->name('edit_product');

    Route::get('/show_product/{id}', 'dashboard_controller@show_product')->name('show_product');

    Route::put('/form_edit_product/{id}', 'dashboard_controller@form_edit_product')->name('form_edit_product');

    Route::get('/delete_product/{id}', function ($id) {
        $delete = DB::delete('delete FROM product where id = '.$id.' ');
        return redirect()->back()->with('success', 'success');
    });

        
    Route::get('/add_event', function(){
        return view('member_bde.add_event');
    })->name('member_bde.add_event');

    Route::get('/list_event', function(){
        return view('member_bde.list_event');
    })->name('member_bde.list_event');

    Route::post('/form_add_event', 'dashboard_controller@form_add_event')->name('form_add_event');

    Route::get('/edit_event/{id}', 'dashboard_controller@edit_event')->name('edit_event');

    Route::put('/form_edit_event/{id}', 'dashboard_controller@form_edit_event')->name('form_edit_event');

    Route::get('/add_activity', function(){
        return view('member_bde.add_activity');
    })->name('member_bde.add_activity');

    Route::get('/list_activity', function(){
        return view('member_bde.list_activity');
    })->name('member_bde.list_activity');

    Route::post('/form_add_activity', 'dashboard_controller@form_add_activity')->name('form_add_activity');

    Route::get('/edit_activity/{id}', 'dashboard_controller@edit_activity')->name('edit_activity');

    Route::put('/form_edit_activity/{id}', 'dashboard_controller@form_edit_activity')->name('form_edit_activity');


});




Route::group(['middleware' => ['auth', 'admin']], function(){

    Route::get('/dashboard', function(){
        return view('admin.home');
    });

    Route::view('/stat', 'admin.stat')->name('stat.index');  
    
    Route::get('/form_add_family', 'dashboard_controller@form_add_family')->name('form_add_family');

    Route::get('/form_add_type', 'dashboard_controller@form_add_type')->name('form_add_type');

    Route::get('/form_add_categorie', 'dashboard_controller@form_add_categorie')->name('form_add_categorie');

    Route::post('/form_add_product', 'dashboard_controller@form_add_product')->name('form_add_product');

     /**
     * user 
     * */
    Route::get('/role-register', 'dashboard_controller@registered')->name('admin.registered');

    Route::get('/role-edit/{id}','dashboard_controller@registeredit')->name('admin.registeredit');

    Route::put('/role-register-update/{id}', 'dashboard_controller@registerupdate');

    Route::delete('/role-delete/{id}', 'dashboard_controller@registerdelete');

    Route::get('/all_command', 'dashboard_controller@all_command')->name('all_command');



});

Route::group(['middleware' => ['auth', 'student']], function(){

    Route::get('/student', function(){
        return view('student.student');
    });
    
});

Route::group(['middleware' => ['auth', 'member_bde']], function(){

    Route::get('/member_bde', function(){
        return view('member_bde.home');
    });    
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/form_add_idea', 'UserController@form_add_idea')->name('form_add_idea');

Route::post('/form_add_comment', 'UserController@form_add_comment')->name('form_add_comment');

Route::get('/contact_form','UserController@contact_form')->name('contact_form.index');



Route::get('/cart_remove/{rowId}', function ($rowId) {
    if (Cart::content()->has($rowId) ){

        Cart::remove($rowId);
        return redirect()->back()->with('success', 'success');
    } else {
        return redirect()->back()->with('error', 'ERREUR DANS LE RETRAIT DU PRODUIT DU PANIER');
    }
    
});

Route::post('/add_wishlist','UserController@add_wishlist')->name('add_wishlist.web');

Route::post('/add_to_cart','UserController@add_to_cart')->name('add_to_cart.web');

Route::get('/product-detail/{id}','UserController@detail_shop')->name('detail_shop.index');

Route::get('/search_shop','UserController@search_shop')->name('search_shop');

Route::get('/specific_market','UserController@specific_market')->name('specific_market');

Route::post('/call_market', 'UserController@call_market')->name('call_market');


