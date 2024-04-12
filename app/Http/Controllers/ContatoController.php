<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller {
    //Método Actions
    public function principal() {
        // echo 'controller contato';
        return view('site.contato');
    }
}