<?php


use App\Http\Controllers\AdminPortal\AdminController;
use App\Http\Controllers\AdminPortal\DashboardController;
use App\Http\Controllers\AdminPortal\FaqController;
use App\Http\Controllers\AdminPortal\FuneralServiceController;
use App\Http\Controllers\AdminPortal\LibraryPhotosController;
use App\Http\Controllers\AdminPortal\PackageController;
use App\Http\Controllers\AdminPortal\PrivacyAndTermsController;
use App\Http\Controllers\AdminPortal\RelationsController;
use App\Http\Controllers\Frontend\Cruds\FeatureController;
use App\Http\Controllers\Frontend\Cruds\IndexController;
use App\Http\Controllers\AdminPortal\RoleController;
use App\Http\Controllers\AdminPortal\UserController;
use App\Http\Controllers\Authentication\ForgetPasswordController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegistrationController;
use App\Http\Controllers\Frontend\Cruds\VirtualFuneralController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Profile\KeeperController;
use App\Http\Controllers\Profile\MessageController;
use App\Http\Controllers\Profile\ProfileController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/virtual-funeral', [HomeController::class, 'virtualFuneral'])->name('virtualfuneral');
Route::get('/for-business', [HomeController::class, 'forBusiness'])->name('forbusiness');
Route::get('/Terms-and-Privacy-Policy', [HomeController::class, 'PrivacyTerms'])->name('privacyTerms');


//AUTHENTICATION

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgotpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forgetpassword');
Route::post('/forgotpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('submitforgetpassword');
Route::get('/resetpassword/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('resetpassword');
Route::post('/resetpassword', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('submitresetpassword');

Route::get('/usersignup', [RegistrationController::class, 'userSignup'])->name('usersignup');
Route::post('/userregistration', [RegistrationController::class, 'userregistration'])->name('userregistration');

Route::get('/memorialsignup', [RegistrationController::class, 'memorialSignup'])->name('memorialsignup');
Route::post('/memorialregistration', [RegistrationController::class, 'memorialregistration'])->name('memorialregistration');

Route::get('/sampleProfile', [ProfileController::class, 'sampleProfile'])->name('sampleProfile');


Route::group(['middleware' => ['auth']], function () {


//    AJAX
    Route::post('/store-memento', [ProfileController::class, 'storeMemento'])->name('store-memento'); //AJAX
    Route::post('/post-comment', [ProfileController::class, 'comment'])->name('post.comment'); //

//    AJAX

    //Route::get('/message',[ProfileController::class,'message'])->name('message');
    //Messaging


//profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/user-profile/{id}', [ProfileController::class, 'userProfile'])->name('edit.user.profile');
        Route::put('/update-user-profile/{id}', [ProfileController::class, 'updateUserProfile'])->name('update.user.profile');


        Route::get('/Creatememorial/{id}', [ProfileController::class, 'Creatememorial'])->name('Creatememorial');
        Route::get('/memorial-profile/{id}', [ProfileController::class, 'MementoInfoProfile'])->name('edit.memorial.profile');
        Route::post('/update-memorial-profile/{id}', [ProfileController::class, 'updateMementoInfoProfile']); //AJAX
        Route::get('/get-updated-image/{userId}/{formType}', [ProfileController::class, 'getUpdatedProfileImage']);  //AJAX


        //Route::get('/memorial-profile',[ProfileController::class,'memorialprofile'])->name('memorialprofile');
        Route::get('/mementos/{id}', [ProfileController::class, 'mementos'])->name('mementos');

        Route::get('/events', [ProfileController::class, 'events'])->name('events');
        Route::get('/family', [ProfileController::class, 'family'])->name('family');

        Route::get('/keeperplus', [ProfileController::class, 'keeperplus'])->name('keeperplus');
        Route::get('/keeper-memorial/{id}', [KeeperController::class, 'keeper'])->name('keeper-memorial');

        Route::get('/memorial-user-profile/{id}', [ProfileController::class, 'profile'])->name('profile');


        Route::get('chat', [MessageController::class, 'show'])->name('chat.show');
        Route::post('storechat', [MessageController::class, 'store']);      //whenever use ajax don't use name function
        Route::get('chat/{id}', [MessageController::class, 'texting'])->name('chat.text');
    });
//    profile

//   Dashboard Admin
    Route::group(['prefix' => 'admin'], function () {

        //DASHBOARD
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.index');

        Route::get('/edit-admin/{id}', [AdminController::class, 'edit'])->name('backend.edit-admin');
        Route::put('/update-admin/{id}', [AdminController::class, 'update'])->name('backend.update-admin');


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

        //<----------CRUD Relation
        Route::group(['prefix' => 'relation'], function () {

            Route::get('/list-relation', [RelationsController::class, 'index'])->name('backend.relation-list');
            Route::get('/add-relation', [RelationsController::class, 'create']);
            Route::post('/add-relation', [RelationsController::class, 'store'])->name('backend.store-relation');
            Route::get('/edit-relation/{id}', [RelationsController::class, 'edit'])->name('backend.edit-relation');
            Route::put('/update-relation/{id}', [RelationsController::class, 'update'])->name('backend.update-relation');
            Route::get('/delete-relation/{id}', [RelationsController::class, 'destroy'])->name('backend.delete-relation');

        });
        //Relation

        //<----------CRUD pdf
        Route::group(['prefix' => 'pdf'], function () {

            Route::get('/list-pdf', [VirtualFuneralController::class, 'indexPDF'])->name('backend.pdf-list');
                Route::get('/add-pdf', [VirtualFuneralController::class, 'createPDF'])->name('backend.add-pdf');
            Route::post('/add-pdf', [VirtualFuneralController::class, 'storePDF'])->name('backend.store-pdf');
            Route::get('/edit-pdf/{id}', [VirtualFuneralController::class, 'editPDF'])->name('backend.edit-pdf');
            Route::put('/update-pdf/{id}', [VirtualFuneralController::class, 'updatePDF'])->name('backend.update-pdf');
            Route::get('/delete-pdf/{id}', [VirtualFuneralController::class, 'destroyPDF'])->name('backend.delete-pdf');

        });
        //pdf

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

        //<----------CRUD Privacyandterms
        Route::group(['prefix' => 'privacyandterms'], function () {
            Route::get('/list-privacyandterms', [PrivacyAndTermsController::class, 'index'])->name('backend.privacyandterms-list');
            Route::get('/add-privacyandterms', [PrivacyAndTermsController::class, 'create'])->name('backend.add-privacyandterms');
            Route::get('/store-privacyandterms', [PrivacyAndTermsController::class, 'store'])->name('backend.store-privacyandterms');
            Route::get('/edit-privacyandterms/{id}', [PrivacyAndTermsController::class, 'edit'])->name('backend.edit-privacyandterms');
            Route::put('/update-privacyandterms/{id}', [PrivacyAndTermsController::class, 'update'])->name('backend.update-privacyandterms');
            Route::get('/delete-privacyandterms/{id}', [PrivacyAndTermsController::class, 'destroy'])->name('backend.delete-privacyandterms');
        });
        //Privacyandterms


        //<----------CRUD Package
        Route::group(['prefix' => 'package'], function () {

            Route::get('/list-package', [PackageController::class, 'index'])->name('backend.package-list');
            Route::get('/add-package', [PackageController::class, 'create']);
            Route::post('/add-package', [PackageController::class, 'store'])->name('backend.add-package');
            Route::get('/delete-package/{id}', [PackageController::class, 'destroy'])->name('backend.delete-package');
            Route::post('/status-package/{id}', [PackageController::class, 'changeStatus'])->name('backend.status-package');

        });
        //Package

        //<----------CRUD Feature
        Route::group(['prefix' => 'feature'], function () {

            Route::get('/list-feature', [FuneralServiceController::class, 'index'])->name('backend.feature-list');
            Route::get('/add-feature', [FuneralServiceController::class, 'create']);
            Route::post('/add-feature', [FuneralServiceController::class, 'store'])->name('backend.add-feature');
            Route::get('/delete-feature/{id}', [FuneralServiceController::class, 'destroy'])->name('backend.delete-feature');
            Route::get('changepermission/{id}', [FuneralServiceController::class, 'changepermission'])->name('backend.changepermission');

        });
        //Feature

        //<----------CRUD Library
        Route::group(['prefix' => 'library'], function () {

            Route::get('/list-library', [LibraryPhotosController::class, 'index'])->name('backend.library-list');
            Route::get('/add-library', [LibraryPhotosController::class, 'create'])->name('backend.add-library');
            Route::post('/store-library', [LibraryPhotosController::class, 'store'])->name('backend.store-library');
            Route::get('/edit-library/{id}', [LibraryPhotosController::class, 'edit'])->name('backend.edit-library');
            Route::put('/update-library/{id}', [LibraryPhotosController::class, 'update'])->name('backend.update-library');
            Route::get('/delete-library/{id}', [LibraryPhotosController::class, 'destroy'])->name('backend.delete-library');

        });
        //Library

        //<----------CRUD Frontend_index
        Route::group(['prefix' => 'frontend_index'], function () {

            Route::get('/frontend_index', [IndexController::class, 'index'])->name('frontend_index.index');
            Route::get('/frontend_index/create', [IndexController::class, 'create'])->name('frontend_index.create');
            Route::post('/frontend_index', [IndexController::class, 'store'])->name('frontend_index.store');
            Route::get('/frontend_index/{id}/edit', [IndexController::class, 'edit'])->name('frontend_index.edit');
            Route::put('/frontend_index/{id}', [IndexController::class, 'update'])->name('frontend_index.update');
            Route::get('/frontend_index/{id}', [IndexController::class, 'destroy'])->name('frontend_index.destroy');
        });
        //Frontend_index

        //<----------CRUD Frontend_feature
        Route::group(['prefix' => 'frontend_feature'], function () {
            Route::get('/frontend_feature', [FeatureController::class, 'index'])->name('frontend_feature.index');
            Route::get('/frontend_feature/create', [FeatureController::class, 'create'])->name('frontend_feature.create');
            Route::post('/frontend_feature', [FeatureController::class, 'store'])->name('frontend_feature.store');
            Route::get('/frontend_feature/{id}/edit', [FeatureController::class, 'edit'])->name('frontend_feature.edit');
            Route::put('/frontend_feature/{id}', [FeatureController::class, 'update'])->name('frontend_feature.update');
            Route::get('/frontend_feature/{id}', [FeatureController::class, 'destroy'])->name('frontend_feature.destroy');
        });
        //Frontend_feature

        //<----------CRUD Frontend_feature
        Route::group(['prefix' => 'frontend_virtual_funeral'], function () {
            Route::get('/frontend_virtual_funeral', [VirtualFuneralController::class, 'index'])->name('frontend_virtual_funeral.index');
            Route::get('/frontend_virtual_funeral/create', [VirtualFuneralController::class, 'create'])->name('frontend_virtual_funeral.create');
            Route::post('/frontend_virtual_funeral', [VirtualFuneralController::class, 'store'])->name('frontend_virtual_funeral.store');
            Route::get('/frontend_virtual_funeral/{id}/edit', [VirtualFuneralController::class, 'edit'])->name('frontend_virtual_funeral.edit');
            Route::put('/frontend_virtual_funeral/{id}', [VirtualFuneralController::class, 'update'])->name('frontend_virtual_funeral.update');
            Route::get('/frontend_virtual_funeral/{id}', [VirtualFuneralController::class, 'destroy'])->name('frontend_virtual_funeral.destroy');

        });
        //Frontend_virtual_funeral
    });
//   Dashboard Admin

    });


