<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Promotion;
use App\Job;
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
//starstorage
Route::get('/call-storage', function(){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return redirect()->back();
});
//endstorage

//ลิงค์หน้าบ้าน
Route::get('/' ,'Admin\ProductController@showproduct');
Route::get('/benefit', function () {
    return view('benefit')->with('product',Product::all())->with('promotion',Promotion::all())->with('job',Job::all());
});
Route::get('/product', function () {
    return view('product')->with('product',Product::all())->with('promotion',Promotion::all())->with('job',Job::all());
});
Route::get('/contact', function () {
    return view('contact')->with('promotion',Promotion::all());
});
//ปิดลิงค์หน้าบ้าน

//font-end
//product
Route::get('product/index', 'Admin\ProductController@showproduct')->name('show.product');
//end

//job
//Route::get('job/index', 'Admin\JobController@showjob')->name('show.job');
//end
//จบ font-end

// ระบบ Authentication
Auth::routes();
// ปิดระบบ Authentication

//ระบบหลังบ้าน
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index','Admin\AdminController@index')->name('admin.index');

//Produtu Route
Route::get('/admin/product','Admin\ProductController@index')->name('admin.product');
Route::get('/admin/addproduct','Admin\ProductController@add')->name('admin.addproduct');
// Route::get('/admin/editproduct','Admin\ProductController@edit')->name('admin.editproduct');
Route::post('/admin/addproduct','Admin\ProductController@store')->name('admin.storeproduct');
Route::delete('/admin/product/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
Route::get('/admin/product/{id}', 'Admin\ProductController@edit')->name('admin.product.edit');
Route::post('/admin/product/{id}', 'Admin\ProductController@update')->name('admin.product.update');

//end

//Employee Route
Route::get('/admin/employee','Admin\EmployeeController@index')->name('admin.employee');
Route::get('/admin/addemployee','Admin\EmployeeController@add')->name('admin.addemployee');
//Route::get('/admin/editemployee','Admin\EmployeeController@edit')->name('admin.editemployee');
Route::post('/admin/addemployee','Admin\EmployeeController@store')->name('admin.storeemployee');
Route::delete('/admin/employee/{id}', 'Admin\EmployeeController@delete')->name('admin.employee.delete');
Route::get('/admin/employee/{id}', 'Admin\EmployeeController@edit')->name('admin.employee.edit');
Route::post('/admin/employee/{id}', 'Admin\EmployeeController@update')->name('admin.employee.update');

//User Route
Route::get('/admin/user','Admin\UserController@index')->name('admin.user');
Route::get('/admin/adduser','Admin\UserController@add')->name('admin.adduser');
Route::post('/admin/adduser','Admin\UserController@store')->name('admin.storeuser');
Route::delete('/admin/user/{id}', 'Admin\UserController@delete')->name('admin.user.delete');
Route::get('/admin/user/{id}', 'Admin\UserController@edit')->name('admin.user.edit');
Route::post('/admin/user/{id}', 'Admin\UserController@update')->name('admin.user.update');


//end

//Job Route
Route::get('/admin/job','Admin\JobController@index')->name('admin.job');
Route::get('/admin/addjob','Admin\JobController@add')->name('admin.addjob');
//Route::get('/admin/editjob','Admin\JobController@edit')->name('admin.editjob');
Route::post('/admin/addjob','Admin\JobController@store')->name('admin.storejob');
Route::delete('/admin/job/{id}', 'Admin\JobController@delete')->name('admin.job.delete');
Route::get('/admin/job/{id}', 'Admin\JobController@edit')->name('admin.job.edit');
Route::post('/admin/job/{id}', 'Admin\JobController@update')->name('admin.job.update');

//end

//Promotion Route
Route::get('/admin/promotion','Admin\PromotionController@index')->name('admin.promotion');
Route::get('/admin/addpromotion','Admin\PromotionController@add')->name('admin.addpromotion');
//Route::get('/admin/editpromotion','Admin\PromotionController@edit')->name('admin.editpromotion');
Route::post('/admin/addpromotion','Admin\PromotionController@store')->name('admin.storepromotion');
Route::delete('/admin/promotion/{id}', 'Admin\PromotionController@delete')->name('admin.promotion.delete');
Route::get('/admin/promotion/{id}', 'Admin\PromotionController@edit')->name('admin.promotion.edit');
Route::post('/admin/promotion/{id}', 'Admin\PromotionController@update')->name('admin.promotion.update');

//end
//ปิดระบบหลังบ้าน
