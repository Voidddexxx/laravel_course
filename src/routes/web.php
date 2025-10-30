<?php

use App\Http\Controllers\Posts;
use Illuminate\Support\Facades\Route;

//Route::get('/', [ Posts::class, 'index' ]);
Route::get('/posts', [ Posts::class, 'index' ]);
Route::get('/posts/{id}', [ Posts::class, 'show' ]);
