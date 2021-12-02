<?php

use App\Http\Controllers\Web\BillController;
use App\Http\Controllers\Web\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\StructureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('structures', [StructureController::class, 'index'])->name('structures.index');
Route::get('structures/create', [StructureController::class, 'create'])->name('structures.create');
Route::post('structures', [StructureController::class, 'store'])->name('structures.store');
Route::get('structures/{id}', [StructureController::class, 'show'])->name('structures.show');
Route::get('structures/{id}/edit', [StructureController::class, 'edit'])->name('structures.edit');

Route::get('structures/{id}/customers', [CustomerController::class, 'index'])->name('structures.customers.index');
Route::get('structures/{id}/customers/create', [CustomerController::class, 'create'])->name('structures.customers.create');
Route::post('structures/{id}/customers', [CustomerController::class, 'store'])->name('structures.customers.store');
Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::delete('customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

Route::get('customers/{id}/bills', [BillController::class, 'index'])->name('customers.bills.index');
Route::get('customers/{id}/bills/create', [BillController::class, 'create'])->name('customers.bills.create');
Route::post('customers/{id}/bills', [BillController::class, 'store'])->name('customers.bills.store');
Route::get('bills/{id}', [BillController::class, 'show'])->name('bills.show');
Route::delete('bills/{id}', [BillController::class, 'destroy'])->name('bills.destroy');