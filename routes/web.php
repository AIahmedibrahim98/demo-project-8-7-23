<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Lec5Controller;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('welcome'));

Route::get('test', fn () => "test page");

// Route::get('test2', [TestController::class, 'test2']);
// Route::post('test2', [TestController::class, 'test2']);
// Route::post('test2', [TestController::class, 'test2']);
//Route::match(['get', 'post'],'test2', [TestController::class, 'test2']);
Route::any('test2', [TestController::class, 'test2']);
Route::view('table', 'test');


Route::get('test3/{name}/{age?}', [TestController::class, 'test3']);

Route::get('calculator/add/{x}/{y}', [CalculatorController::class, 'add']);
Route::get('calculator/sub/{x}/{y}', [CalculatorController::class, 'sub']);
Route::get('calculator/multi/{x}/{y}', [CalculatorController::class, 'multi']);
Route::get('calculator/div/{x}/{y}', [CalculatorController::class, 'div']);
// Route::get('calculator/div/{x}/{y}', "CalculatorController@div"); // old way

Route::get('product/{id}/{name}', function (Request $request) {
    $id = $request->id;
    $name = $request->name;
    echo "<h2>Product Id is $id</h2>";
    echo "<h2>Product Name is $name</h2>";
})
    //->where('id','[0-9]+')->where('name','[A-Z]+');
    //->whereNumber('id')->whereAlpha('name');
    ->whereIn('name', ['car', 'cat']);


Route::get('product/show', function () {
    echo "This is product Show Page";
})->name('ps');

/* Route::get('users' ,fn()=>'Index User')->name('users.index');
Route::get('/users/create',fn()=>'Create User')->name('users.create');
Route::get('users/edit/{id}',fn($id)=> "Edit User $id")->name('users.edit');
Route::get('users/show/{id}',fn($id)=> "Show User $id")->name('users.show');
Route::get('users/delete/{id}',fn($id)=> "Delete User $id")->name('users.delete'); */


Route::prefix('users')->as('users.')->group(function () {
    Route::get('/', fn () => 'Index User')->name('index');
    Route::get('/create', fn () => 'Create User')->name('create');
    Route::get('/edit/{id}', fn ($id) => "Edit User $id")->name('edit');
    Route::get('/show/{id}', fn ($id) => "Show User $id")->name('show');
    Route::get('/delete/{id}', fn ($id) => "Delete User $id")->name('delete');
});


Route::prefix('lec5')->as('lec5.')->group(function () {
    Route::get('page1', [Lec5Controller::class, 'page1'])->name('page1');
    Route::get('page2', [Lec5Controller::class, 'page2'])->name('page2');
    Route::get('page3', [Lec5Controller::class, 'page3'])->name('page3');
});
