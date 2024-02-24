<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * @ Public Routes
 */

Route::post('/auth-user', [AuthController::class, 'auth_user']);   

Route::post('/login', [AuthController::class, 'auth_user']);                

Route::post('/register-user', [AuthController::class, 'register']);

Route::post('/add-contact', [ContactsController::class, 'add_contact']);

Route::put('/update-contact/{contact_id}', [ContactsController::class, 'update_contact']);

Route::delete('delete-contact/{contact_id}', [ContactsController::class , 'delete_contact']);

// Route::get('get-contacts', [ContactsController::class , 'get_contacts']);
/**
 * @ Protected Routes
 */

 Route::group(['middleware' => ['auth:sanctum']], function() {
    
    Route::get('get-contacts', [ContactsController::class , 'get_contacts']);

    Route::get('get-contact/{contact_id}', [ContactsController::class , 'get_contact']);

    Route::delete('logout', [AuthController::class, 'destroy_auth']);
    
 });

// Route::middleware(['auth:sanctum'])->group(function () {
//     // Common routes for authenticated users

//     Route::middleware(['role:user'])->group(function () {
//         // Routes for regular users
//         Route::get('get-contacts', [ContactsController::class , 'get_contacts']);
//     });

//     Route::middleware(['role:admin'])->group(function () {
//         // Routes for admin users
//         Route::post('/logout', [AuthController::class, 'destroy_auth']);
//     });
// });



