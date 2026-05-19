<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialAccountController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'partnersCount' => \App\Models\Partner::count(),
            'postsCount' => \App\Models\Post::count(),
            'servicesCount' => \App\Models\Service::count(),
            'latestComments' => \App\Models\Comment::with(['post', 'user'])->latest()->take(5)->get(),
        ]);
    })->name('dashboard');

    Route::get('/admin/practice-areas', [ServiceController::class, 'index'])->name('admin.practices');
    Route::get('/admin/practice-areas/{service}/edit', [ServiceController::class, 'edit'])->name('admin.practices.edit');
    Route::put('/admin/practice-areas/{service}', [ServiceController::class, 'update'])->name('admin.practices.update');
    Route::get('/admin/practice-areas/create', [ServiceController::class, 'create'])->name('admin.practices.create');
    Route::post('/admin/practice-areas', [ServiceController::class, 'store'])->name('admin.practices.store');
    Route::delete('/admin/practice-areas/{service}', [ServiceController::class, 'destroy'])->name('admin.practices.destroy');

    Route::get('/admin/partners', [PartnerController::class, 'index'])->name('admin.partners');
    Route::get('/admin/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('admin.partners.edit');
    Route::put('/admin/partners/{partner}', [PartnerController::class, 'update'])->name('admin.partners.update');
    Route::get('/admin/partners/create', [PartnerController::class, 'create'])->name('admin.partners.create');
    Route::post('/admin/partners', [PartnerController::class, 'store'])->name('admin.partners.store');
    Route::delete('/admin/partners/{partner}', [PartnerController::class, 'destroy'])->name('admin.partners.destroy');

    Route::get('/admin/news', [PostController::class, 'index'])->name('admin.news');
    Route::get('/admin/news/{post}/edit', [PostController::class, 'edit'])->name('admin.news.edit');
    Route::put('/admin/news/{post}', [PostController::class, 'update'])->name('admin.news.update');
    Route::get('/admin/news/create', [PostController::class, 'create'])->name('admin.news.create');
    Route::delete('/admin/news/{post}', [PostController::class, 'destroy'])->name('admin.news.destroy');

    Route::get('/admin/comments', [CommentController::class, 'index'])->name('admin.comments');
    Route::delete('/admin/comments/{comment}', [CommentController::class, 'destroy'])->name('admin.comments.destroy');

    Route::get('/admin/settings', [SocialAccountController::class, 'settings'])->name('admin.settings');
    Route::post('/admin/settings/social', [SocialAccountController::class, 'store'])->name('admin.settings.social.store');
    Route::put('/admin/settings/social/{socialAccount}', [SocialAccountController::class, 'update'])->name('admin.settings.social.update');
});

Route::view('/about', 'about')->name('about');
Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services');
Route::redirect('/practice-areas', '/services');
Route::get('/resources', [PostController::class, 'publicIndex'])->name('resources');
Route::get('/resources/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::post('/resources/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::view('/contact', 'contact')->name('contact');
Route::view('/schedule', 'contact')->name('schedule'); // Reusing contact for now as a fallback

