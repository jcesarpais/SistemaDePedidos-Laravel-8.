<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*============================================================ Inicio das rotas FrontEnd ============================================================*/
route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('inicio');
route::get('/category/products/show/{category_id}', [App\Http\Controllers\FrontEndController::class, 'pratos_show'])->name('categoria_pratos');
route::post('/add/cart', [App\Http\Controllers\CartController::class, 'insert'])->name('comprar');
route::get('/cart/show', [App\Http\Controllers\CartController::class, 'show'])->name('cart_show');
route::get('/cart/remove/{rowId}', [App\Http\Controllers\CartController::class, 'remove'])->name('remove_item');
route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('update_item');

/*============================================================== Fim das rotas FrontEnd =============================================================*/

/*============================================================== Inicio das rotas Checkout FrontEnd =============================================================*/
route::get('/checkout/checkout', [App\Http\Controllers\checkoutController::class, 'checkout'])->name('finalizar_pedido');

/*============================================================== Fim das rotas Checkout FrontEnd =============================================================*/

/*============================================================== Inicio das rotas de Registro FrontEnd =============================================================*/
Route::get('/register/customer', [App\Http\Controllers\CustomerController::class, 'show'])->name('cadastrar');
Route::post('/register/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('store_customer');
route::get('/shipping', [App\Http\Controllers\CustomerController::class, 'shipping'])->name('shipping');
route::post('/shipping/store', [App\Http\Controllers\CustomerController::class, 'save'])->name('store_shipping');
/*============================================================== Fim das rotas de Registro FrontEnd =============================================================*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*============================================================ Inicio das rotas da Categoria ============================================================*/
route::get('/category/add', [App\Http\Controllers\categoryController::class, 'index'])->name('show_category_table')->middleware('auth');
route::post('/category/save', [App\Http\Controllers\categoryController::class, 'save'])->name('save_categoria')->middleware('auth');
route::post('/category/update', [App\Http\Controllers\categoryController::class, 'update'])->name('update_categoria')->middleware('auth');
route::get('/category/manage', [App\Http\Controllers\categoryController::class, 'manage'])->name('manage_categoria')->middleware('auth');
route::get('/category/active{category_id}', [App\Http\Controllers\categoryController::class, 'active'])->name('active_categoria')->middleware('auth');
route::get('/category/inactive{category_id}', [App\Http\Controllers\categoryController::class, 'inactive'])->name('inactive_categoria')->middleware('auth');
route::get('/category/delete{category_id}', [App\Http\Controllers\categoryController::class, 'delete'])->name('delete_categoria')->middleware('auth');
/*============================================================ Fim das rotas da Categoria ============================================================*/

/*============================================================ Inicio das rotas Adicionar MotoBoy ============================================================*/
route::get('/delivery/motoboy/add', [App\Http\Controllers\motoboyController::class, 'index'])->name('show_motoboy_add_table')->middleware('auth');
route::post('/delivery/motoboy/save', [App\Http\Controllers\motoboyController::class, 'save'])->name('save_motoboy')->middleware('auth');
route::post('/delivery/motoboy/update', [App\Http\Controllers\motoboyController::class, 'update'])->name('update_motoboy')->middleware('auth');
route::get('/delivery/motoboy/manage', [App\Http\Controllers\motoboyController::class, 'manage'])->name('manage_motoboy')->middleware('auth');
route::get('/delivery/motoboy/active{motoboy_id}', [App\Http\Controllers\motoboyController::class, 'active'])->name('active_motoboy')->middleware('auth');
route::get('/delivery/motoboy/inactive{motoboy_id}', [App\Http\Controllers\motoboyController::class, 'inactive'])->name('inactive_motoboy')->middleware('auth');
route::get('/delivery/motoboy/delete{motoboy_id}', [App\Http\Controllers\motoboyController::class, 'delete'])->name('delete_motoboy')->middleware('auth');
/*============================================================ Fim das rotas do Adicionar MotoBoy ============================================================*/

/*============================================================ Inicio das Rotas dos Cupons ============================================================*/
route::get('/cupons/add', [App\Http\Controllers\cuponsController::class, 'index'])->name('show_cupons_add_table')->middleware('auth');
route::post('/cupons/save', [App\Http\Controllers\cuponsController::class, 'save'])->name('save_cupons')->middleware('auth');
route::post('/cupons/update', [App\Http\Controllers\cuponsController::class, 'update'])->name('update_cupons')->middleware('auth');
route::get('/cupons/manage', [App\Http\Controllers\cuponsController::class, 'manage'])->name('manage_cupons')->middleware('auth');
route::get('/cupons/active{cupon_id}', [App\Http\Controllers\cuponsController::class, 'active'])->name('active_cupons')->middleware('auth');
route::get('/cupons/inactive{cupon_id}', [App\Http\Controllers\cuponsController::class, 'inactive'])->name('inactive_cupons')->middleware('auth');
route::get('/cupons/delete{cupon_id}', [App\Http\Controllers\cuponsController::class, 'delete'])->name('delete_cupons')->middleware('auth');
/*============================================================ Fim das rotas dos Cupons ============================================================*/

/*============================================================ Inicio das Rotas dos Pratos ============================================================*/
route::get('/pratos/add', [App\Http\Controllers\pratosController::class, 'index'])->name('show_pratos_add_table')->middleware('auth');
route::post('/pratos/save', [App\Http\Controllers\pratosController::class, 'save'])->name('save_pratos')->middleware('auth');
route::post('/pratos/update', [App\Http\Controllers\pratosController::class, 'update'])->name('update_pratos')->middleware('auth');
route::get('/pratos/manage', [App\Http\Controllers\pratosController::class, 'manage'])->name('manage_pratos')->middleware('auth');
route::get('/pratos/active{pratos_id}', [App\Http\Controllers\pratosController::class, 'active'])->name('active_pratos')->middleware('auth');
route::get('/pratos/inactive{pratos_id}', [App\Http\Controllers\pratosController::class, 'inactive'])->name('inactive_pratos')->middleware('auth');
route::get('/pratos/delete{pratos_id}', [App\Http\Controllers\pratosController::class, 'delete'])->name('delete_pratos')->middleware('auth');
/*============================================================ Fim das rotas dos Pratos ============================================================*/