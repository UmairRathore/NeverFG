<?php


use App\Http\Controllers\AdminPortal\DashboardController;
use App\Http\Controllers\AdminPortal\RoleController;
use App\Http\Controllers\Authentication\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/',[\App\Http\Controllers\Authentication\RegistrationController::class,'memorialregistration']);




Route::get('/dashboard',[DashboardController::class,'index'])->name('backend.index');

Route::get('/signup',[AuthController::class]);
Route::post('/signup',[AuthController::class]);
Route::get('/login',[AuthController::class]);
Route::post('/login',[AuthController::class]);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password',[AuthController::class]);
Route::post('/forgot-password',[AuthController::class]);




//<----------CRUD ROLE

Route::group(['prefix' => 'role'], function () {

    Route::get('/role-list', [RoleController::class, 'index'])->name('backend.role-list');
    Route::get('/add-role', [RoleController::class, 'create']);
    Route::post('/add-role', [RoleController::class, 'store'])->name('backend.add-role');
    Route::get('/edit-role/{id}', [RoleController::class, 'edit'])->name('backend.edit-role');
    Route::patch('/update-role/{id}', [RoleController::class, 'update'])->name('backend.update-role');
    Route::get('/delete-role/{id}', [RoleController::class, 'destroy'])->name('backend.delete-role');

});
//Role

