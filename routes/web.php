<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

// Khi truy cập vào URL gốc, tự động chuyển hướng đến route 'customers'
Route::get('/', function () {
    return redirect('customers');
});

// Định nghĩa resource controller cho khách hàng
Route::resource('customers', CustomerController::class);

// Các route riêng lẻ cho khách hàng (có thể bỏ nếu đã dùng resource route)
Route::get('customers', [CustomerController::class, 'index']);
Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::delete('customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
