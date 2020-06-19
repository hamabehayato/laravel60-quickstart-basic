<?php

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

use App\Task;
use Illuminate\Http\Request;

/**
 * タスクダッシュボード表示
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * 新タスク追加
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // タスク作成処理…
});
/**
 * タスク削除
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});
