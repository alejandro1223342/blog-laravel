<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', function (){

    return "Aqui se mostrara un formulario para crear un nuevo post";
    
});

Route::get('/posts/{post}/{category?}', function ($post) {

    return "Aqui se mostra el post {$post}";

});


// Route::get('/posts/{post}/{category}', function ($post,$category) {
//     return "Aqui se mostra el post {$post} de la categoria {$category}";
// });
