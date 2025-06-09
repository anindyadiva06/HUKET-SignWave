<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KamusController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/index', [ArtikelController::class, 'indexView'])->name('index');
Route::get('/', [ArtikelController::class, 'indexView'])->name('index');

Route::get('/kamus-index', [KamusController::class, 'index'])->name('kamus-index');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard-admin', function () {
            return view('dashboard-admin');
        })->name('dashboard-admin');

        Route::get('/profile-admin', [ProfileController::class, 'showAdminProfile'])->name('profile-admin');
        Route::get('/edit-profile-admin', [ProfileController::class, 'editAdminProfile'])->name('profile-admin.edit');
        Route::put('/edit-profile-admin', [ProfileController::class, 'updateAdminProfile'])->name('profile-admin.update');

        Route::get('/kelola-feedback', [FeedbackController::class, 'index'])->name('kelola-feedback');
        Route::delete('/feedback/{id_feedback}', [FeedbackController::class, 'destroy'])->name('delete-feedback');
        Route::get('/index-kelola-user', [UserController::class, 'index'])->name('index-kelola-user');
        Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
        Route::post('/create-user', [UserController::class, 'store'])->name('create-user.store');
        Route::get('/{username}/edit-user', [UserController::class, 'edit'])->name('edit-user');
        Route::put('/{username}/edit-user', [UserController::class, 'update'])->name('edit-user.update');
        Route::delete('/index-kelola-user/{username}', [UserController::class, 'destroy'])->name('index-kelola-user.destroy');
    // Admin Routes
        Route::get('/latihan/index', [LatihanController::class, 'adminIndex'])->name('latihan.index');
        Route::get('/latihan/tambah', [LatihanController::class, 'create'])->name('latihan.create');
        Route::post('/latihan', [LatihanController::class, 'store'])->name('latihan.store');
        Route::get('/latihan/{id}/edit', [LatihanController::class, 'edit'])->name('latihan.edit');
        Route::put('/latihan/{id}', [LatihanController::class, 'update'])->name('latihan.update');
        Route::delete('/latihan/{id}', [LatihanController::class, 'destroy'])->name('latihan.destroy');

        Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel.index');
        Route::get('artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
        Route::post('artikel', [ArtikelController::class, 'store'])->name('artikel.store');
        Route::get('artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
        Route::put('artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
        Route::delete('artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

        //kamus admin
        Route::get('kamus', [KamusController::class, 'indexAdmin'])->name('kamus.index');
        Route::get('kamus/tambah', [KamusController::class, 'tambah'])->name('kamus.tambah');
        Route::post('kamus', [KamusController::class, 'store'])->name('kamus.store');
        Route::get('kamus/{id}/edit', [KamusController::class, 'edit'])->name('kamus.edit');
        Route::put('kamus/{id}', [KamusController::class, 'update'])->name('kamus.update');
        Route::delete('kamus/{id}', [KamusController::class, 'destroy'])->name('kamus.destroy');

    });

    Route::middleware('role:user')->group(function () {
        Route::get('/home-user', function () {
            return view('home-user');
        })->name('home-user');

        Route::get('/profile-user', [ProfileController::class, 'showUserProfile'])->name('profile-user');
        Route::get('/edit-user-profile', [ProfileController::class, 'editUserProfile'])->name('profile-user.edit');
        Route::put('/edit-user-profile', [ProfileController::class, 'updateUserProfile'])->name('profile-user.update');
        Route::post('/home-user', [FeedbackController::class, 'store'])->name('home-user.feedback');
        Route::get('/home-user', [ArtikelController::class, 'home'])->name('home-user');
        Route::get('/kamus-user', [KamusController::class, 'home'])->name('kamus-user');
        // User Routes
        Route::get('latihan', [LatihanController::class, 'index'])->name('latihan');
        Route::get('soal', [LatihanController::class, 'showQuestions'])->name('latihan.showQuestions');
        Route::post('/latihan/submit', [LatihanController::class, 'submitQuiz'])->name('latihan.submitQuiz');
        Route::get('hasil', [LatihanController::class, 'showResults'])->name('latihan.showResults');
        Route::get('/latihan/review', [LatihanController::class, 'reviewAnswers'])->name('latihan.reviewAnswers');
    });


});

