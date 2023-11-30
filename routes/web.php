<?php

use App\Http\Controllers\bookTicketController;
use App\Http\Controllers\listBookedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::get('/list-booked', function () {
//     return view('list-booked');
// });
Route::get('/book-ticket', function () {
    return view('book-ticket');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/book-new-ticket', [bookTicketController::class, 'create'])->name('add.ticket');
    Route::get('/list-booked', [listBookedController::class, 'getListBooked'])->name('get.ticket');
});



require __DIR__.'/auth.php';
