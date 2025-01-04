<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GetDataAnime; 
use App\Http\Controllers\LoginRegisterForm;

Route::get('/', [GetDataAnime::class, "getDataAnimeIndex"])->name("index.anime.list");

Route::get('/anime', [GetDataAnime::class, "getDataAnime"])->name("anime.list");

Route::get('/anime/page/{id}', [GetDataAnime::class, "getDataAnimePage"])->name("anime.page.list");

Route::get('/season', [GetDataAnime::class, "getDataAnimeSeason"])->name("season.anime.list");

Route::get('/season/page/{id}', [GetDataAnime::class, "getDataAnimeSeasonPage"])->name("season.page.anime.list");

Route::get('/top', [GetDataAnime::class, "getDataAnimeTop"])->name("top.anime.list");

Route::get('/top/page/{id}', [GetDataAnime::class, "getDataAnimeTopPage"])->name("top.page.anime.list");

Route::get('/search/{id}', [GetDataAnime::class, "getDataAnimeSearch"])->name("top.anime.list");

Route::get('/anime/{id}', [GetDataAnime::class, "getDataAnimeById"])->name("id.anime.list");

Route::get('/dashboard', function() {
  return view("dashboard");
})->name("dashboard")->middleware("auth");

Route::get('/login', function() {
  if(Auth::user()) {
    return redirect("/");
  }
  return view("login");
})->name("login");

Route::get('/register', function() {
  if(Auth::user()) {
    return redirect("/");
  }
  return view("register");
})->name("register");

Route::post('/searchAnime', [GetDataAnime::class, "postDataAnimeSearch"])->name("id.anime.list");

Route::post("/loginForm",[LoginRegisterForm::class,"LoginForm"]);

Route::post("/registerForm",[LoginRegisterForm::class,"RegisterForm"]);

Route::post("/logout",function() {
  Auth::logout();
  return redirect("/login");
})->name("logout")->middleware("auth");