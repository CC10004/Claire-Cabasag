<?php

use Illuminate\Support\Facades\Route;

Route::get('/GREET', function () {
    return response()->json(
        'Hello World'
    );
});
