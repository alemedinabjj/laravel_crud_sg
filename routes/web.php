<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@main')->name('site.index');
Route::get('/about', 'AboutController@about')->name('site.about');
Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::post('/contact', 'ContactController@contact')->name('site.contact');
Route::get('/login', function() {
    return 'Login';
})->name('site.login');


//prefix
Route::prefix('/app')->group(function() {

    Route::get('/customers', function() {
        return 'Customers';
    })->name('app.customers');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/products', function() {
        return 'Products';
    })->name('app.products');   

});


Route::get('/teste', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});

