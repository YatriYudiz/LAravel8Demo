<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

//Using closure
Route::get('/', function () {
    return view('welcome');
});

// Route::view('/','welcome');
// Route::view('/welcome', '/welcome', ['name' => 'Taylor']);

Route::post('/sayhello', function() {
        return 'Hey ! Hello';
});


// Creating a new route
Route::get('/viewhello', function() {
    return view('index');
});



//with parameters

// Route::get('/{name}', function($name){
//     echo $name;
//     return view('welcome');
// });

// Route::get('/{name}', function($name){
//     echo $name;
//     return view('welcome',['name' => $name ]);
// });

Route::get('/{user}/friends/{name}', function($user,$name){
    return "Hello $user, you are friend with $name";
});

//USing Controller
Route::get('/controller-route', [DemoController::class, 'index']);

Route::get('/controller-list', [DemoController::class, 'list']);


// Route::get('/controller-list/{name}', [DemoController::class, 'list']);

// Session Demo 

Route::get('session-get', [App\Http\Controllers\SessionController::class, 'accessSessionData']);
Route::get('session-set', [App\Http\Controllers\SessionController::class, 'storeSessionData']);
Route::get('session-remove', [App\Http\Controllers\SessionController::class, 'deleteSessionData']);

Route::get('/session',function()  
{  
  return view('form');  
});  
Route::post('store-data',[App\Http\Controllers\FormController::class, 'store'])->name('forms.store');
Route::get('allSessionShow',[App\Http\Controllers\FormController::class, 'retrievingSession']);
Route::view('user-data', 'user');


require __DIR__.'/auth.php';
