<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/catalogo', function () { 
return view('catalogo'); 
}); 

Route::get('/comercializacion', function () { 
return view('comercializacion'); 
});

Route::get('/consultas', function () { 
return view('consultas'); 
}); 

Route::get('/informacion', function () { 
return view('informacion'); 
}); 

Route::get('/quienes-somos', function () { 
return view('quienes_somos'); 
}); 

Route::get('/terminos-y-usos', function () { 
return view('terminos_y_usos'); 
});