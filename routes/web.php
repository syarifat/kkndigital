<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DemoController;

// Landing Page Jualan Website KKN
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Order Form & SPK
Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{order_number}', [OrderController::class, 'show'])->name('order.show');

// Admin Panel (Manage Leads)
Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
Route::patch('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.status');
Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');

// Live Demo Templates (Basic, Standard, Pro, Premium)
Route::get('/demo/{template}', [DemoController::class, 'show'])->name('demo.show');

