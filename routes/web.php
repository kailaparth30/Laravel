<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\DemoController;
use App\Http\Controller\SingleActionController;
use App\Http\Controller\PhotoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomersController;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProtfolioController;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;




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

Route::get('/', function () {
    return view('layout.customer.form');
});

Route::get('/upload', function () {
    return view('layout1.home.upload');
});


// Route::get('/', [DemoController::class, 'index']);
// Route::get('/home', 'DemoController@index');
// Route::get('/header' , SingaleActionController::class);
// Route::get('/photo', photoController::class);

// Route::get('/userregister', [RegisterController::class, 'index']);
// Route::post('/userregister', [RegisterController::class, 'Register']);

Route::get('/Customers/index',[CustomersController::class, 'index']);

Route::post('/contactdata',[ContactController::class, 'contactdata']);

Route::get('/layout/contact',[ContactController::class, 'contact'])->name('layout1.contact');

Route::post('/Customers/store',[CustomersController::class, 'store'])->name('Customers.store');

Route::get('/layout1/home/register',[RegisterController::class, 'Register']);

Route::post('/registerdatastore',[RegisterController::class, 'registerdatastore']);

Route::get('layout1/home/login',[LoginController::class, 'login']);

Route::post('/login/loginprocess',[LoginController::class, 'loginprocess'])->name('login.loginprocess');

Route::get('/Customers/delete/{id}',[CustomersController::class, 'delete'])->name('Customers.delete');

Route::post('/Customers/Update',[CustomersController::class, 'Update'])->name('Customer.Update');

Route::get('/Customers/edit/{id}',[CustomersController::class, 'edit'])->name('Customer.edit');

Route::get('/Customers/delete/{id}',[CustomersController::class, 'destroy'])->name('Customer.delete');

Route::get('/Customers/restore/{id}',[CustomersController::class, 'restore'])->name('Customer.restore');

Route::get('/Customers/trash',[CustomersController::class, 'trash'])->name('Customer.trash');

Route::get('/Customers/view',[CustomersController::class, 'view'])->name('Customer.view');

Route::get('/',[HomeController::class, 'index']);

Route::get('/layout/about',[AboutController::class, 'about'])->name('layout.about');


Route::get('/layout/Portfolio', [ProtfolioController::class, 'protfilio'])->name('layout.protfilio');

Route::get('/layout/services', [ServicesController::class, 'services'])->name('layout.services');

Route::get('/data', [IndexController::class, 'index']);

Route::get('/group', [IndexController::class, 'group']);

Route::post('/upload', [ContactController::class, 'upload']);



Route::get('/Customers', function () {

    // $coustomers = Customer::all();
    // echo "<pre>";
    // print_r($coustomers);
});

Route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'Add');
    $request->session()->put('email', 'parthkaila@gmail.com');
    $request->session()->flash('status', 'success');
    return redirect('get-all-session');
});

Route::get('destroy-session', function (Request $request) {
    session()->forget(['name', 'id']);
    return redirect('get-all-session');
});
