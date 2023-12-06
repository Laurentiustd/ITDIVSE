<?php


use App\Http\Controllers\MovieController;
use App\Http\Controllers\bookTicketController;
use App\Http\Controllers\listBookedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
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

Route::get('/', [MovieController::class, 'index2'])->name('get.movie.homepage');
Route::get('/detail/{id}', [MovieController::class, 'detail'])->name('detail');

Route::get('/list-theater', function () {
    return view('list-theater');
})->name('list');

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::middleware('auth', 'is_admin')->group(function () {
    Route::get('/admin-panel', [MovieController::class, 'index1'])->name('admin.panel');
    Route::post('/add-movie', [MovieController::class, 'create'])->name('add.movie');
    Route::get('/edit-movie/{id}', [MovieController::class, 'show'])->name('edit.movie');
    Route::patch('/update-movie/{id}', [MovieController::class, 'update'])->name('update.movie');
    Route::delete('/delete-movie/{id}', [MovieController::class, 'destroy'])->name('delete.movie');
});



Route::middleware('auth')->group(function () {
    Route::post('/book-new-ticket', [bookTicketController::class, 'create'])->name('add.ticket');
    Route::get('/list-booked', [listBookedController::class, 'getListBooked'])->name('get.ticket');
});



require __DIR__.'/auth.php';
