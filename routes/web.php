<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DesignTestController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DefaultPlaylistController;
use App\Http\Controllers\UserController; // Import UserController


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users', [UserController::class, 'index']);

// // Show login & register forms
// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// // Handle login & registration
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);

// // Logout route
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// // Protected routes (only logged-in users can access)


// Route::get('/check-user', function () {
//     if (Auth::check()) {
//         return "Logged in as: " . Auth::user()->email;
//     } else {
//         return "No user is logged in.";
//     }
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     // ✅ Apply middleware directly inside the route
//     Route::middleware([IsAdmin::class])->group(function () {
//         Route::get('/admin', function () {
//             return view('admin_dashboard');
//         })->name('admin_dashboard');
//     });
// });


Route::get("/design",[DesignTestController::class,'index'])->name('design.index');

Route::get("/",[LandingPageController::class,"index"])->name("ladings.index");

Route::get("/playlist",[DefaultPlaylistController::class,'index'])->name("playlist.index");
