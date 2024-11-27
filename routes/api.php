<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Models\Post;
use Illuminate\Http\Request;

// Rotas com o middleware de CORS aplicado
Route::middleware('cors')->group(function () {

    Route::get('/hello', function () {
        return response()->json(['message' => 'Oi do Laravel!']);
    });

    Route::get('/teste', [TesteController::class, 'index'])->name('teste.index');

    Route::post('/test-post', function (Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $post = Post::create([
            'name' => $validatedData['name'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $post,
        ]);
    });

});
