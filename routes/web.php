<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/courses', CourseController::class);

Route::resource('/students', StudentController::class);

Route::get('/test-mail', function () {
    $data = new StudentController();
    $data = $data->show(1);
    $subject = 'Test Mail';

    Mail::to('noxire@gmail.com')->send(new TestMail($data, $subject));
    return 'Mail sent successfully';
})->name('test-mail');

Route::get('/mail-test', [StudentController::class, 'mailTest'])->name('mail-test');

require __DIR__.'/auth.php';
