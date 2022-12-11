<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TourserviceController;
use App\Http\Controllers\CommentController;




use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/amenities', function () {
    return view('amenities');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/aboutus', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('sign-in');
});


Route::get('/dashboard', function () {
    return view('dashboards');
})->middleware(['auth'])->name('dashboard');

Route::resource('/customers', CustomerController::class);
Route::resource('/payment', PaymentController::class);
Route::resource('/booking', BookingController::class);
Route::resource('/tour', TourserviceController::class);
Route::resource('/comment', CommentController::class);

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
     Route::get('/', [IndexController::class, 'index'])->name('index');
     Route::resource('/roles', RoleController::class);
     Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
     Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
     Route::resource('/permissions', PermissionController::class);
     Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
     Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
     Route::get('/users', [UserController::class, 'index'])->name('users.index');
     Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
     Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
     Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
     Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
     Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
     Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');  
     
    

});


 require __DIR__ . '/auth.php';



