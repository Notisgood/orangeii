<?php
Route::get('/', function () {
    return view('auth/login');
});
Route::get('test','homeController@blank');
//
Route::get('index','productController@index');
Route::get('home', 'productController@home')->name('home');
Route::get('profile', 'productController@profile')->name('profile');
Route::get('dashboard', 'productController@dashboard')->name('dashboard');

//register start
Route::post('add', 'MemberController@add')->name('add');
Route::get('addstaff', 'MemberController@addstaff')->name('addstaff');
Route::get('access', 'MemberController@access')->name('access');
Route::get('register', 'productController@register')->name('register');
//register end

Route::get('productlist', 'productController@productlist')->name('productlist');
Route::get('productexp', 'productController@productexp')->name('productexp');
Route::get('productrunout', 'productController@productrunout')->name('productrunout');
Route::get('productin', 'productController@productin')->name('productin');
Route::get('productout', 'productController@productout')->name('productout');
Route::get('productlot', 'productController@productlot')->name('productlot');
Route::get('productclass', 'productController@productclass')->name('productclass');
Route::get('producttype', 'productController@producttype')->name('producttype');
Route::get('productlog', 'productController@productlog')->name('productlog');
Route::get('reportdaily', 'productController@reportdaily')->name('reportdaily');
Route::get('reportstaff', 'productController@reportstaff')->name('reportstaff');
Route::get('reportproduct', 'productController@reportproduct')->name('reportproduct');
// search
Route::get('/productsearch', 'productController@productsearch')->name('productsearch');
Route::get('/productfind', 'productController@productfind')->name('productfind');
Route::get('/productfindday', 'productController@productfindday')->name('productfindday');

// ajax request
Route::post('/getProduct','productController@getProduct')->name('getProduct');
Route::post('/getMember','MemberController@getMember')->name('getMember');


//update
Route::post('update_product','productController@update')->name('update.product');

Route::post('updatetype','productController@updatetype')->name('updatetype');
Route::post('updateclass','productController@updateclass')->name('updateclass');

//edit
Route::get('productedit/{id}', 'productController@productedit')->name('productedit');
//insert
Route::post('/inRegister','productController@inRegister');
Route::post('/inProductType','productController@inProductType');
Route::post('/inProductClass','productController@inProductClass');
Route::post('/inProductIn','productController@inProductIn')->name('inProductIn');
Route::post('/inProductOut','productController@inProductOut')->name('inProductOut');
Route::post('/accessadd','MemberController@accessadd')->name('accessadd');

// print pdf
Route::post('/printpdf','productController@printpdf');
Route::get('/form','productController@printpdf');
//forloop insert
Route::get('/addlot','productController@addlot');


Route::get('datatable_product','productController@datatable_product');
Route::get('datatable_productfind', 'productController@datatable_productfind');



//auth
Auth::routes();
Route::get('/userlogout','HomeController@userlogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
