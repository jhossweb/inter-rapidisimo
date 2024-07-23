<?php

use App\Livewire\Employee\Employee;
use App\Livewire\Employee\ListEmployeWithCustomer;
use App\Livewire\Guia\Guia;
use App\Livewire\Guia\GuiasCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    #Route::get("/guias/{guias}", function() { return view("guias.show"); })->name("guias.show");
    Route::get("/guias/create", GuiasCreate::class)->middleware("can:guias.create")->name("guias.create");
    Route::get("/guias/{customer}", Guia::class)->middleware("can:guias.show")->name("guias.show");
    Route::get("/employees", Employee::class)->middleware("can:employee")->name("employee");
    Route::get("/employees/{employee}", ListEmployeWithCustomer::class)->middleware("can:employee.show")->name("employee.show");
});

// ->middleware(\App\Http\Middleware\ForceHttps::class)
