<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //Método Actions
    public function principal()
    {
        // echo 'controller contato';
        return view('site.contato');
    }

    public function submit(Request $request)
    {
        // Validação das regras.
        $rules = [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];

        // Validação do input.
        $request->validate($rules);

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}