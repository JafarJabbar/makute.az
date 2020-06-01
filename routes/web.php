<?php
/*
    esas sehife ucun controller.
*/

Route::get('/',"Main\MainController@index")->name('home');


/*
    Haqqimizda sehifesi ucun controller
 */

 Route::get('/about',"About\AboutController@index")->name('about');

/*
    Magazalar sehifesi ucun controller
 */

Route::group(['prefix' => 'store', 'as' => 'store.'], function () {
    Route::get('/',"Store\StoreController@index")->name('index');
});
/*
    Mehsullar sehifesi ucun controller
 */

Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
    Route::get('/',"Product\ProductController@index")->name('index');
    Route::get('/{category}',"Product\ProductController@category")->name('category');
    Route::get('/product/{url}',"Product\ProductController@show")->name('show.one');
});

/*
    Bizimlə əlaqə sehifesi ucun controller
 */
 Route::get('/contact',"Contact\ContactController@index")->name('contact');


/*
    admin sehifesi   ucun controller.
*/

Route::group(['prefix'=>'auth','as'=>'auth.','namespace'=>'AdminControllers'],function (){
    Route::get('/login',"Auth\AuthController@login")->name('login');
    Route::post('/login',"Auth\AuthController@start")->name('start');
    Route::post('/logout',"Auth\AuthController@logout")->name('logout');
});

Route::group(['prefix'=>'admin','middleware'=>'AuthMiddleware','as'=>'admin.','namespace'=>'AdminControllers'],function (){
    Route::get('/dashboard',"Main\MainController@index")->name('dashboard');

    Route::group(['prefix'=>'product','as'=>'product.'],function (){
       Route::post('/add','ProductController@add')->name('add');
       Route::get('/show/{product?}','ProductController@show')->name('show');
       Route::post('/action','ProductController@action')->name('action');
    });

    Route::group(['prefix'=>'category','as'=>'category.'],function (){
       Route::GET('/categories','CategoryController@index')->name('index');
       Route::post('/add','CategoryController@add')->name('add');
       Route::get('/show/{category?}','CategoryController@show')->name('show');
       Route::post('/action','CategoryController@action')->name('action');
    });

    Route::group(['prefix'=>'store','as'=>'store.'],function (){
       Route::get('/stores','StoreController@index')->name('index');
       Route::post('/add','StoreController@add')->name('add');
       Route::get('/show/{product?}','StoreController@show')->name('show');
       Route::post('/action','StoreController@action')->name('action');
    });

    Route::group(['prefix'=>'config','as'=>'config.'],function (){
       Route::get('/','ConfigController@index')->name('index');
       Route::post('/edit','ConfigController@edit')->name('edit');
    });



});
