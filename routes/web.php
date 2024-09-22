<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webcontrol;

Route::get('/', [webcontrol::class, 'homePage']);

Route::get('/bookdetail/{id}', [webcontrol::class, 'bookdetailPage']);
  
Route::get('/publisher', [webcontrol::class, 'publisherPage']);
  
Route::get('/publisherdetail/{id}', [webcontrol::class, 'publisherDetailPage']);

Route::get('/contact', [webcontrol::class, 'contactPage']);

Route::get('/category/{name}', [webcontrol::class, 'categoryPage']);