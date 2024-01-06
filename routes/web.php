<?php


use App\Http\Controllers\AdminPortal\AdminController;
use App\Http\Controllers\AdminPortal\DashboardController;
use App\Http\Controllers\AdminPortal\FaqController;
use App\Http\Controllers\AdminPortal\PackageController;
use App\Http\Controllers\AdminPortal\RoleController;
use App\Http\Controllers\AdminPortal\UserController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Authentication\ForgetPasswordController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegistrationController;
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





Route::get('/usersignup',[RegistrationController::class,'userSignup'])->name('userSignUp');
Route::get('/memorialsignup',[RegistrationController::class,'memorialregistration'])->name('memorialregistration');
Route::post('/signup',[RegistrationController::class]);
//Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/postlogin',[LoginController::class,'postLogin'])->name('postlogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password',[ForgetPasswordController::class]);
Route::post('/forgot-password',[ForgetPasswordController::class]);


Route::group(['prefix' => 'admin','middleware' => ['auth']] ,function () {

    //DASHBOARD
    Route::get('/dashboard',[DashboardController::class,'index'])->name('backend.index');


    Route::get('/edit-admin/{id}',[AdminController::class,'edit'])->name('backend.edit-admin');
    Route::put('/update-admin/{id}',[AdminController::class,'update'])->name('backend.update-admin');


//<----------CRUD User

    Route::group(['prefix' => 'user'], function () {

        Route::get('/list-user', [UserController::class, 'index'])->name('backend.list-user');
        Route::get('/add-user', [UserController::class, 'create']);
        Route::post('/add-user', [UserController::class, 'store'])->name('backend.add-user');
        Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('backend.edit-user');
        Route::patch('/update-user/{id}', [UserController::class, 'update'])->name('backend.update-user');
        Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('backend.delete-user');
        Route::post('/status-user/{id}', [UserController::class, 'changeStatus'])->name('status-user');

    });
//User


//<----------CRUD ROLE

    Route::group(['prefix' => 'role'], function () {

        Route::get('/list-role', [RoleController::class, 'index'])->name('backend.role-list');
        Route::get('/add-role', [RoleController::class, 'create']);
        Route::post('/add-role', [RoleController::class, 'store'])->name('backend.add-role');
        Route::get('/edit-role/{id}', [RoleController::class, 'edit'])->name('backend.edit-role');
        Route::patch('/update-role/{id}', [RoleController::class, 'update'])->name('backend.update-role');
        Route::get('/delete-role/{id}', [RoleController::class, 'destroy'])->name('backend.delete-role');

    });
//Role



//<----------CRUD Faq

    Route::group(['prefix' => 'faq'], function () {

        Route::get('/list-faq', [FaqController::class, 'index'])->name('backend.faq-list');
        Route::get('/add-faq', [FaqController::class, 'create'])->name('backend.add-faq');
        Route::post('/storeTopic', [FaqController::class, 'storeTopic'])->name('backend.storeTopic');
        Route::post('/storeQuestionAnswer', [FaqController::class, 'storeQuestionAnswer'])->name('backend.topic-storeQuestionAnswer');
        Route::get('/edit-faq/{id}', [FaqController::class, 'edit'])->name('backend.edit-faq');
        Route::put('/update-faq/{id}', [FaqController::class, 'update'])->name('backend.update-faq');
//        Route::put('/updateTopic/{id}', [FaqController::class, 'updateTopic'])->name('backend.updateTopic');
//        Route::put('/updateQuestionAnswer/{id}', [FaqController::class, 'updateQuestionAnswer'])->name('backend.topic-updateQuestionAnswer');
        Route::get('/delete-faq/{id}', [FaqController::class, 'destroy'])->name('backend.delete-faq');

    });
//Faq


//<----------CRUD Package

Route::group(['prefix' => 'package'], function () {

    Route::get('/list-package', [PackageController::class, 'index'])->name('backend.package-list');
    Route::get('/add-package', [PackageController::class, 'create']);
    Route::post('/add-package', [PackageController::class, 'store'])->name('backend.add-package');
    Route::get('/delete-package/{id}', [PackageController::class, 'destroy'])->name('backend.delete-package');
    Route::post('/status-package/{id}', [PackageController::class, 'changeStatus'])->name('backend.status-package');

});
//Package

});
