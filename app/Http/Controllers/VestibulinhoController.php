<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VestibulinhoController extends Controller {
    //Método Actions
    public function principal() {
        // echo 'controller vestibulinho';
        return view('site.vestibulinho');
    }
}