<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursosController extends Controller {
    //Método Actions
    public function principal() {
        // echo 'controller cursos';
        return view('site.cursos');
    }
}