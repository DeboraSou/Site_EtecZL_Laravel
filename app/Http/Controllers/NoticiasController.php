<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiasController extends Controller {
    //Método Actions
    public function principal() {
        // echo 'controller cursos';
        return view('site.noticias');
    }
}