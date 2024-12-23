<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Livewire\Call;
use App\Livewire\CreateCall;
use App\Livewire\CreateEmployee;
use App\Livewire\CreateReview;
use App\Livewire\CreateVisitor;
use App\Livewire\EditCall;
use App\Livewire\EditEmployee;
use App\Livewire\EditReview;
use App\Livewire\EditVistor;
use App\Livewire\Employee;
use App\Livewire\Review;
use App\Livewire\User;
use App\Livewire\ViewCall;
use App\Livewire\ViewReview;
use App\Livewire\ViewVisitor;
use App\Livewire\Visitor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/users',User::class)->name('users')->middleware([
    'auth:sanctum',config('jetstream.auth_session'),'verified'
]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/calllog')->group(function () {
    Route::get('/',Call::class)->name('calllog');
    Route::get('/create',CreateCall::class)->name('createcall');
    Route::get('/{call}/edit',EditCall::class)->name('editcall');
    Route::get('/{call}',ViewCall::class)->name('viewcall');  
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/visitor')->group(function(){
    Route::get('',Visitor::class)->name('visitors');
    Route::get('/create',CreateVisitor::class)->name('createvisitor');
    Route::get('/{visitor}/edit',EditVistor::class)->name('editvisitor');
    Route::get('/{visitor}',ViewVisitor::class)->name('viewvisitor');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/employees')->group(function(){
    Route::get('/',Employee::class)->name('employees');
    Route::get('/create',CreateEmployee::class)->name('createemployee');
    Route::get('/{employee}/edit',EditEmployee::class)->name('editemployee');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->prefix('/review')->group(function(){
    Route::get('',Review::class)->name('review');
    Route::get('/create',CreateReview::class)->name('createreview');
    Route::get('/{review}/edit',EditReview::class)->name('editreview');
    Route::get('/{review}',ViewReview::class)->name('viewreview');
});


