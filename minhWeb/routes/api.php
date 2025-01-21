<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BillsController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('getAll', [UsersController::class, 'index']); // Lấy tất cả users
    Route::get('{id}', [UsersController::class, 'show']); // Lấy user theo ID
    Route::post('/', [UsersController::class, 'store']); // Tạo user mới
    Route::put('{id}', [UsersController::class, 'update']); // Cập nhật user
    Route::delete('{id}', [UsersController::class, 'destroy']); // Xóa user
});

Route::prefix('bills')->group(function () {
    Route::get('/', [BillsController::class, 'index']); // Lấy tất cả bills
    Route::get('{id}', [BillsController::class, 'show']); // Lấy bill theo ID
    Route::post('/', [BillsController::class, 'store']); // Tạo bill mới
    Route::put('{id}', [BillsController::class, 'update']); // Cập nhật bill
    Route::delete('{id}', [BillsController::class, 'destroy']); // Xóa bill

    Route::get('today', [BillsController::class, 'allBillToday']); // Tổng tiền của tất cả bills hôm nay
    Route::get('yesterday', [BillsController::class, 'allBillYesterday']); // Tổng tiền của tất cả bills hôm qua
    Route::get('hourly-revenue', [BillsController::class, 'calculateHourlyRevenue']); // Doanh thu theo giờ
});
