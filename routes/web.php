<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
    // return view('welcome');
//     return 'Aula de PW III';
// });

// Route::get('/quemsomos', function () {
//     return 'Quem somos';
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });

Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal');

// Novas rotas.
Route::get('/cursos', 'App\Http\Controllers\CursosController@principal');
Route::get('/oportunidades', 'App\Http\Controllers\OportunidadesController@principal');
Route::get('/vestibulinho', 'App\Http\Controllers\VestibulinhoController@principal');
Route::get('/noticias', 'App\Http\Controllers\NoticiasController@principal');

Route::get('/contato', 'App\Http\Controllers\ContatoController@principal');

Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index');

// Apelido nas rotas. Descomentar.
Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal')->name('site.sobrenos');

// Novas rotas.
Route::get('/cursos', 'App\Http\Controllers\CursosController@principal')->name('site.cursos');
Route::get('/oportunidades', 'App\Http\Controllers\OportunidadesController@principal')->name('site.oportunidades');
Route::get('/vestibulinho', 'App\Http\Controllers\VestibulinhoController@principal')->name('site.vestibulinho');
Route::get('/noticias', 'App\Http\Controllers\NoticiasController@principal')->name('site.noticias');

Route::get('/contato', 'App\Http\Controllers\ContatoController@principal')->name('site.contato');

Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('site.fornecedores');

// Agrupamento de rotas. Descomentar.
Route::prefix('/admin')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; });
    // Route::get('/fornecedores', function() { return 'Fornecedores'; }); Manter comentado.
    // Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('admin.fornecedores'); Manter comentado.
    // Route::get('/fornecedores', 'FornecedoresController@index')->name('admin.fornecedores'); Manter comentado.
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('admin.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; });
});

// Passagem de parâmetros no browser.
// Route::get('/contato/{nome}', function(string $nome) {
//     echo 'Passagem de parâmetros via browser: ' . $nome;
// });

// Passagem de parâmetros no browser.
// Route::get('/contato/{nome}/{mensagem?}', 
//     function(string $nome, string $mensagem = 'sem texto') {
//         echo "Passagem de parâmetros via browser: $nome - $mensagem";
//     });

// Passagem de parâmetros no browser. Descomentar.
Route::get('/admin', 
    function() {
        return redirect()->route('site.index');
    }
);

// Rota Fallback.  Descomentar.
Route::fallback(function() {
        echo 'A rota não existe <a href= "'.route('site.index').'"> Clique aqui</a> ';
    }
);

//Descomentar.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Aula 21.03.2024
// Route::get('/', 'PrincipalController@principal')->name('site.index');
// Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
// Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedor');
// Route::get('/contato', 'ContatoController@contato')->name('site.contato');
// Route::get('/login', function(){return 'Login';})->name('site.login');

// Route::prefix('/app')->group(function() {
//     Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
//     Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedor');
//     Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
// });

// Route::get('/teste/{p1}{p2}', 'TesteController@teste')->name('site.teste');

// Route::fallback(function() {
//     echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a página principal.';
// });