<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message' => 'Oi do Laravel!']);
});

Route::get('/teste', [App\Http\Controllers\TesteController::class, 'index'])->name('teste.index');