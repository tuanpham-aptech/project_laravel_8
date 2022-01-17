<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\ContactController;

Route::group(['prefix'=>'admin','middleware'=>'permission.checker:admin|member'],function(){
    // Start route Product
    Route::get('products',[ProductController::class,'index'])->name('products');
    Route::get('create-product',[ProductController::class,'createProduct'])->name('create-product');
    Route::post('insert-product',[ProductController::class,'insertProduct'])->name('insert-product');
    Route::get('edit-product/{id}',[ProductController::class,'editProduct'])->name('edit-product');
    Route::post('update-product/{id}',[ProductController::class,'updateProduct']);
    Route::post('delete-product/{id}',[ProductController::class,'deleteProduct']);

    // End Route Product
    // Start route Category
    Route::get('categories',[CategoriesController::class,'index'])->name('categories');
    Route::get('create-category',[CategoriesController::class,'createCategory'])->name('create-category');
    Route::post('create-category',[CategoriesController::class,'insertCategory'])->name('create-category');
    Route::post('delete-category/{id}',[CategoriesController::class,'deleteCategory'])->name('delete-category');
    Route::get('edit-category/{id}',[CategoriesController::class,'editCategory'])->name('edit-category');
    Route::post('update-category/{id}',[CategoriesController::class,'updateCategory']);
    // End route Category

    Route::group(['prefix'=>'transactions'],function(){
        Route::get('transactions',[TransactionController::class,'index'])->name('list-transactions');
        Route::get('/view/{id}',[TransactionController::class,'viewOrder'])->name('transaction-view-order');
        Route::get('/delete/{id}',[TransactionController::class,'deleteItemOrder'])->name('delete-item-order');
        Route::get('/active/{id}',[TransactionController::class,'actionTransaction'])->name('active-item-transaction');
    });

    Route::group(['prefix'=>'users'],function(){
        Route::get('users',[UserController::class,'index'])->name('list-users');
        Route::get('edit-user/{id}',[UserController::class,'editUser'])->name('edit-user');
        Route::post('update-user/{id}',[UserController::class,'updateUser'])->name('update-user');
        Route::post('delete-user/{id}',[UserController::class,'deleteUser'])->name('delete-user');

    });

    Route::group(['prefix'=>'articals'],function(){
        Route::get('articals',[ArticalController::class,'index'])->name('list-articals');
        Route::get('create-articals',[ArticalController::class,'createArticals'])->name('create-articals');
        Route::post('create-articals',[ ArticalController::class,'insertArticals']);
        Route::get('edit-articals/{id}',[ArticalController::class,'editArticals'])->name('edit-articals');
        Route::post('update-articals/{id}',[ArticalController::class,'updateArticals'])->name('update-articals');
        Route::get('delete-articals/{id}',[ArticalController::class,'deleteArticals'])->name('delete-articals');
        Route::get('action-active-articals/{id}',[ArticalController::class,'actionActive'])->name('action-active-articals');
        // Route::get('new/{slug}-{id}',[NewController::class,'newDetail'])->name('view-new-detail');
    });

     Route::get('logout',[LogoutController::class,'index'])->name('logout');
     Route::get('/',[DashboardController::class,'index'])->name('dashboard');

     Route::get('/profile',function(){
         return view('profile');
     })->name('profile');
});
// Client
Route::prefix('shopping')->group(function(){
    Route::get('add/{id}',[CartController::class,'addToCart'])->name('add-shopping-cart');
    Route::get('cart',[CartController::class,'index'])->name('cart');
    Route::get('cart-destroy/{itemId}',[CartController::class,'destroy'])->name('cart-destroy');
    Route::post('cart-update/{rowId}',[CartController::class,'update'])->name('cart-update')->middleware('auth');
    Route::get('form-payment',[CartController::class,'getFormPayment'])->name('form-payment')->middleware('auth');
    Route::post('save-info-shopping-cart',[CartController::class,'saveInfoShoppingCart'])->name('save-info-shopping-cart')->middleware('auth');
});

Route::get('change-password',[UserController::class,'showFormSendLink'])->name('show-form-send-link');
Route::post('change-password',[UserController::class,'sendResetLink'])->name('change-password-link');

Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'saveContact']);

Route::get('news',[ArticalController::class,'newDisplayClient'])->name('news');

Route::get('category/{slug}-{id}',[CategoriesController::class,'getListProduct'])->name('get-list-product');
Route::get('product/{slug}-{id}',[ProductController::class,'productDetail'])->name('product-detail');
Route::get('product/selling',[HomeController::class,'productSelling'])->name('product-selling');
Route::get('product/hot',[HomeController::class,'productHot'])->name('product-hot');

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login']);

Route::get('logout',[LogoutController::class,'logoutClient'])->name('logout-client');

Route::get('signup',[SignupController::class,'get'])->name('signup');
Route::post('signup',[SignupController::class,'post']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('search-client',[HomeController::class,'searchClient'])->name('search-client');
Route::get('403',[LoginController::class,'flas'])->name('403');
