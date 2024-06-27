<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\PenjualProductController;
use App\Http\Controllers\PenjualDashboardController;

Route::get('/', [MainPageController::class, 'index'])->name('mainpage.index');

Route::get('/maps', function () {
    return view('maps');
})->name('maps');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        // Redirect user based on usertype
        $user = auth()->user();
        if ($user->role === 'admin') {
            return redirect()->intended(route('dashboard_admin'));
        } elseif ($user->role == 'penjual') {
            return redirect()->intended(route('dashboard_penjual'));
        } elseif ($user->role == 'pembeli') {
            return redirect()->intended(route('dashboard_pembeli'));
        }
    })->name('dashboard');

    Route::get('/pembeli', function () {
        return view('dashboard_pembeli');
    })->name('dashboard_pembeli');

    Route::middleware(['auth'])->group(function () {
        Route::get('/pembeli/order/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/pembeli/order', [OrderController::class, 'store'])->name('order.store');
        Route::get('/pembeli/order', [OrderController::class, 'index'])->name('order.index');
    });

    Route::get('pembeli/payment/buat', [PaymentController::class, 'create'])->name('payment.create');
    Route::post('pembeli/payment', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('pembeli/payment', [PaymentController::class, 'index'])->name('payment.index');

    // Route::get('/penjual', function () {
    //     return view('dashboard_penjual');
    // })->name('dashboard_penjual');

    Route::get('/penjual', [PenjualDashboardController::class, 'index'])->name('dashboard_penjual');
    Route::get('/histori', [PenjualDashboardController::class, 'historipenjual'])->name('histori_penjual');
    Route::get('/profilperusahaan', [PenjualDashboardController::class, 'profiperusahaan'])->name('profil_perusahaan');

    Route::get('/admin', function () {
        return view('dashboard_admin');
    })->name('dashboard_admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::get('/admin/orders/create', [AdminOrderController::class, 'create'])->name('orders.create');
    Route::post('/admin/orders', [AdminOrderController::class, 'store'])->name('orders.store');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('product', ProductController::class);
Route::resource('product_penjuals', PenjualProductController::class);

require __DIR__ . '/auth.php';
