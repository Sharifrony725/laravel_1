<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController
;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/' , function(){
//     return 'This is home page';
// });
Route::get('/', [HomeController::class, 'index'] );
Route::get('/test', [HomeController::class, 'test'] );
//Route parameters
//Required parameters
/*
Route::get('/users/{name?}', function ($namel) {
    return 'Hi I am ' . $name;
});
*/

//Regular expression Constraints
/*
Route::get('/users/{name?}', function ($name = null) {
    return 'Hi I am ' . $name;
})->where('name' , '[a-zA-Z]+');
*/

// Regular expression Numeric 
// Route::get('/products/{id?}', function ($id = null) {
//     return 'Products id  is ' . $id;
// })->where('id' , '[0-9]+');
//optional perameters
Route::get('/products/{id?}', function ($id = null) {
    return 'Products id  is ' . $id;
});
// Route::get('/about' , function(){
//     return view('about');
// });
// Route::get('/contact', function () {
//     return "This is contact page";
// });

//Name Route 
Route::get('/home' ,[HomeController::class, 'index'])->name('home.index');
//Route::get('user/{name?}', [UserController::class,'index']);
Route::resource('photos', PhotoController::class);
Route::get('/user',[UserController::class,'index']); 
