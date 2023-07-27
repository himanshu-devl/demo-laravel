<?php

use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;

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


Route::get('/', function () {
    return view('welcome');
});
// routes/web.php




Route::view('/tasks/create', 'create')
    ->name('tasks.create');




Route::post('/tasks', function (Request $request) {
    
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required'
    ]);
    dd($request->all());

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.store');




Route::get('/demo', [democontroller::class,'demo']);



Route::get('/register', [FormController::class,'index']);



Route::post('/register', [FormController::class,'register']);




Route::fallback(function () {
    return 'Still got somewhere!';
});