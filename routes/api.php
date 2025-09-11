<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\News;

Route::get('/news', function () {
    return News::all();
});

Route::get('/news/{id}', function ($id) {
    return News::findOrFail($id);
});
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
