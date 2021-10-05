<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\DateInformerMail;
use App\Http\Controllers\EmailsController;
use Illuminate\Support\Facades\DB;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/all-receivers',[EmailsController::class,'getAllEmails'])->name('receiver.getAllreceiverusingmodel');

Route::view('/all-receivers','auth.receivers');


Route::post('/createe',[EmailsController::class,'store'])->name('add a new receiver');


Route::get('delete/{id}',[EmailsController::class,'delete'])->name('receiver.delete');
Route::get('show/{id}',[EmailsController::class,'show'])->name('receiver.show');

Route::post('edit-receiver',[EmailsController::class,'update'])->name('receiver.update');
Route::get('receiver-update-forme/{id}}',[EmailsController::class,'showForm'])->name('receiver.update.form');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

