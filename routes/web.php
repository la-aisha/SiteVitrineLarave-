<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\ChambreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/services', 'services');
Route::view('/literie', 'literie');
Route::view('/chambre', 'chambre');

Route::view('/salon', 'salon');
Route::view('/decoration', 'decoration');
Route::view('/electromenager', 'electromenager');
Route::view('/categories', 'categories');
/* ------ */

Route::post('contact_mail' ,[HomeController::class ,'contact_send_mail']);
Route::get('/chambre/{id}', [ChambreController::class, 'send_whatsap'])->name('chambre');


