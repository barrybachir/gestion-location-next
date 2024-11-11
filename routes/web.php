<?php

use App\Http\Controllers\orderController;
use App\Livewire\vehicule\AvailableVehiculeList;
use App\Livewire\vehicule\VehiculeForm;
use App\Livewire\vehicule\VehiculeList;
use App\Livewire\vehicule\VehiculeMaintenance;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/vehicule/create',  VehiculeForm::class)->name('vehicule.create');
    Route::get('/vehicule/list',  VehiculeList::class)->name('vehicule.list');
    Route::get('/vehicule/available',  AvailableVehiculeList::class)->name('vehicule.available.list');
    Route::get('/order/list',  \App\Livewire\OrderList::class)->name('order.list');
    Route::get('/vehicules/edit/{vehiculeId}', \App\Livewire\vehicule\EditVehicle::class)->name('vehicule.edit');
    Route::get('/client/list',  \App\Livewire\client\ClientListe::class)->name('client.list');
    Route::get('/client/{clientId}/commandes', \App\Livewire\client\ClientOrders::class)->name('client.commandes');
    Route::get('/client/create',  \App\Livewire\client\ClientAdd::class)->name('client.create');
    Route::get('/order/confirme/{id}',  [orderController::class, 'confirm'])->name('order.confirm');
    Route::get('/order/return/{id}',  [orderController::class, 'return'])->name('order.return');
    Route::get('/vehicule/{vehiculeId}/maintenance', VehiculeMaintenance::class)->name('vehicule.maintenance');
    Route::get('/chauffeur/create',  \App\Livewire\client\ChauffeurAdd::class)->name('chauffeur.create');
    Route::get('/chauffeur/list',  \App\Livewire\client\ChauffeurListe::class)->name('chauffeur.list');

});
