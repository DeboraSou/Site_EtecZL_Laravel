<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OportunidadesController extends Controller {
    //Método Actions
    public function principal() {
        // echo 'controller oportunidades';
        return view('site.oportunidades');
    }
}