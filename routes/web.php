<?php 
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
  
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
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home']); 
Route::get('about', [AuthController::class, 'about']); 
Route::get('contact', [AuthController::class, 'contact']); 
Route::get('portfolio', [AuthController::class, 'portfolio']);
Route::get('services', [AuthController::class, 'services']);  
Route::get('team', [AuthController::class, 'team']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
