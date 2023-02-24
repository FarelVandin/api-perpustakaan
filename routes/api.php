<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostC;
use App\Http\Controllers\bookC;

route::get('/', function(){
    return 'Hello World API !';
});
route::get('/posts',[PostC::class,'index'])->middleware(['auth:sanctum']);
route::get('/posts/{id}',[PostC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/password',function(){
    return Hash::make('rahasia');
});

route::get('/books',[bookC::class,'index']);
route::get('/books/{id}',[bookC::class,'detail']);