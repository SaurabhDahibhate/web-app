<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpController;
use App\Http\Controllers\BoqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\QouteController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\BusbarController;
use App\Http\Controllers\AmmeterController;
use App\Http\Controllers\CurrentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MountingController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\PanelTypeController;
use App\Http\Controllers\VoltMeterController;
use App\Http\Controllers\CableEntryController;
use App\Http\Controllers\IndicationController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\SwitchMakeController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\PanelColourController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CableMakeTypeController;
use App\Http\Controllers\PanelLocationController;
use App\Http\Controllers\User\BoqController as UserBoqCrontroller;
use App\Http\Controllers\UserController;
Auth::routes();

//

//Route::middleware(['auth'])->group(function () {
Route::resource('qoute', QouteController::class);
Route::resource('indication', IndicationController::class);
Route::resource('voltmeter', VoltMeterController::class);
Route::resource('ammeter', AmmeterController::class);
Route::resource('switchmake', SwitchMakeController::class);
Route::resource('panellocation', PanelLocationController::class);
Route::resource('panelcolour', PanelColourController::class);
Route::resource('busbar', BusbarController::class);
Route::resource('cabletype', CableEntryController::class);
Route::resource('cablemaketype', CableMakeTypeController::class);
Route::resource('access', AccessController::class);
Route::resource('mounting', MountingController::class);

// product master routes
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubCategoryController::class);
Route::resource('units', UnitController::class);
Route::resource('manufactures', ManufactureController::class);
Route::resource('products', ProductController::class);

// master data routes
Route::resource('hps', HpController::class);
Route::resource('currents', CurrentController::class);
Route::resource('paneltypes', PanelTypeController::class);
Route::resource('components', ComponentController::class);

Route::get('master_datas', [MasterDataController::class, 'index'])->name('master_datas.index');
Route::get('master_datas/{hpId}/{manuId}/{panelTypeId}', [MasterDataController::class, 'create'])->name('master_datas.create');

Route::get('master_datas/hooter_data', [MasterDataController::class, 'hooterIndex'])->name('master_datas.hooters.index');

Route::get('master_datas/currents', [MasterDataController::class, 'currentIndex'])->name('master_datas.currents.index');
Route::get('master_datas/currents/{currentId}/{manuId}/{panelTypeId}', [MasterDataController::class, 'currentCreate'])->name('master_datas.currents.create');

Route::get('requisition', [RequisitionController::class, 'index'])->name('requisition.index');

Route::get('boq_requests', [BoqController::class, 'index'])->name('boqs.index');
Route::get('boq_requests/{id}', [BoqController::class, 'show'])->name('boqs.show');
Route::post('boq_requests/{id}/approve', [BoqController::class, 'approve'])->name('boqs.approve');
Route::post('boq_requests/{id}/sendEmail', [BoqController::class, 'sendEmail'])->name('boqs.sendEmail');

Route::get('user/boq_requests', [UserBoqCrontroller::class, 'index'])->name('user.boqs.index');
Route::get('user/boq_requests/{id}', [UserBoqCrontroller::class, 'show'])->name('user.boqs.show');
Route::get('user/quotations', [UserBoqCrontroller::class, 'quotationIndex'])->name('user.quotations.index');
Route::get('requisition/quotation/{id}', [RequisitionController::class, 'showQuotation'])->name('requisition.quotation.show');
Route::post('requisition/quotation/{id}', [UserBoqCrontroller::class, 'submitQuotation'])->name('requisition.quotation.submit');




Route::get('/customers', [UserController::class, 'index']);
Route::get('/customers/{id}/boq', [UserController::class, 'boq'])->name('customer_boq');

Route::get('/', [HomeController::class, 'root'])->name('root');

Route::post('file-import', [ProductController::class, 'importProducts'])->name('file-import');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [HomeController::class, 'index'])->name('index');
//});
//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);
