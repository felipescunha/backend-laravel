<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GithubController;

Route::get("/github/user/{name}", [GithubController::class, "index"]);
Route::get("/github/user/{name}/following", [GithubController::class, "followers"]);
