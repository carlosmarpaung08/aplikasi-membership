<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grup Route yang memerlukan otentikasi (login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- Route untuk Konten (Artikel dan Video) ---\
    // Route untuk menampilkan daftar artikel (akan difilter di controller)
    Route::get('/articles', [ContentController::class, 'articles'])->name('artikel.index');
    // Route untuk menampilkan detail artikel
    Route::get('/articles/{id}', [ContentController::class, 'showArticle'])->name('artikel.show');
    
    Route::get('/artikel/tipe-a', function () {
        return view('content.articles.article-a');
    })->middleware('check.membership:A,B,C')->name('artikel.tipe-a');

    // Artikel Tipe B: Bisa diakses oleh B, C
    Route::get('/artikel/tipe-b', function () {
        return view('content.articles.article-b');
    })->middleware('check.membership:B,C')->name('artikel.tipe-b');

    // Artikel Tipe C: Bisa diakses oleh C
    Route::get('/artikel/tipe-c', function () {
        return view('content.articles.article-c');
    })->middleware('check.membership:C')->name('artikel.tipe-c');

    // Route untuk menampilkan daftar video (akan difilter di controller)
    Route::get('/videos', [ContentController::class, 'videos'])->name('video.index');
    // Route untuk menampilkan detail video
    Route::get('/videos/{id}', [ContentController::class, 'showVideo'])->name('video.show');
    
    // Video Tipe A: Bisa diakses oleh A, B, C
    Route::get('/video/tipe-a', function () {
        return view('content.videos.video-a');
    })->middleware('check.membership:A,B,C')->name('video.tipe-a');

    // Video Tipe B: Bisa diakses oleh B, C
    Route::get('/video/tipe-b', function () {
        return view('content.videos.video-b');
    })->middleware('check.membership:B,C')->name('video.tipe-b');

    // Video Tipe C: Bisa diakses oleh C
    Route::get('/video/tipe-c', function () {
        return view('content.videos.video-c');
    })->middleware('check.membership:C')->name('video.tipe-c');
    // -------------------------------------------------------------
});

// Route untuk Otentikasi Sosial (Ditempatkan di luar grup 'auth' agar bisa diakses sebelum login)
Route::middleware('web')->group(function () {
    Route::get('/auth/{provider}', [SocialLoginController::class, 'redirectToProvider'])->name('social.login');
    Route::get('/auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);
});

// --- Route untuk Logout langsung redirect ke /login ---
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// --- Route untuk Halaman Admin ---
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    // Dashboard Admin: Menampilkan daftar user
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users.index');

    // Mengubah tipe membership user (POST request)
    Route::post('/admin/users/{user}/update-membership', [AdminController::class, 'updateMembership'])->name('admin.users.updateMembership');
});
// ------------------------------------

require __DIR__.'/auth.php';