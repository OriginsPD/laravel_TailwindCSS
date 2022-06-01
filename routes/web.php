<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Home\Features\AboutUs;
use App\Http\Livewire\Home\Features\ContactUs;
use App\Http\Livewire\Home\Features\Lists\CompleteList;
use App\Http\Livewire\Home\Index;
use App\Http\Livewire\RentalDetails\RentalForm;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', Index::class)->name('index');

Route::get('/contact-us',ContactUs::class)->name('contact-us');
Route::get('/about-Us', AboutUs::class)->name('about-Us');
Route::get('/cars&service', CompleteList::class)->name('services');

Route::group(['middleware' => 'auth'],function(){
    Route::get('customize-rental/{id:id}', RentalForm::class)->name('rental-form');
});


Route::get('/Admin', AdminDashboard::class)
    ->name('Admin.dashboard');
