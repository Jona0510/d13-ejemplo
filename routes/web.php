<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informacion/{tipo?}',function($tipo = null) {//El null y signo de pregunta es para no hacer el obligatorio del uso de un tipo
    // dd($tipo); //Debugear

    return view('info',compact('tipo'));//Aqui pasas la variable a nuestro proyecto
});

Route::get('/contacto',function() {
    return view('contacto');
});

Route::post('/recibe-contacto',function(Request $request){ //Por metodo no importa que sea igual al de arriba 
    //dd($request -> all()); //$request -> nombre() Recuperar nombre por nombre
    $nombre = $request->nombre;

    //Validar datos 

    //Guardar datos

    //Redireccionar

    
    return 'Hola post';


});