<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //Método Actions
    public function principal() {
        // echo 'controller sobre nós';
        return view('site.sobrenos');
    }
}