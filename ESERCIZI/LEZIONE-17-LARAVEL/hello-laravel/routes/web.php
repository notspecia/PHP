<?php

/*Faker\Factory: Viene importata la classe Faker\Factory, 
che è usata per generare dati fittizi (fake data). 
In questo caso, non è ancora utilizzata all'interno delle rotte. */

use App\Http\Controllers\ProductController;
use Faker\Factory;

/* Illuminate\Support\Facades\Route: Importa la classe Route, 
che gestisce la definizione delle rotte HTTP nel progetto Laravel. Ogni rotta 
associata a una URL risponde a una specifica azione. */
use Illuminate\Support\Facades\Route;

/*uando visiti la home page del progetto (ad esempio, http://localhost o http://localhost:8000 
se stai usando il server di sviluppo di Laravel), viene restituita la vista chiamata welcome. */

Route::get('/', function () {
    return view('welcome');
});

// questa rotta risponde a una richiesta GET all'URL /intervallo.
Route::get('/intervallo', function (): string {
    return 'intervallo :)';
});





Route::get('/web', function () {
    return view('webdev', ["nome" => "gabriele"]);
});


Route::get('/products', [ProductController::class, "all"]);

