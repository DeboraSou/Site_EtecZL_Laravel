<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    
    // public function index() {
    //     return view(' admin\fornecedores\index');
    // }

    public function index() {
        $fornecedores = [
            'Fornecedores 1',
            'Fornecedores 2',
            'Fornecedores 3',
            'Fornecedores 4',
            'Fornecedores 5',
            'Fornecedores 6',
            'Fornecedores 7',
            'Fornecedores 8',
            'Fornecedores 9',
            'Fornecedores 10',
            'Fornecedores 11',
            'Fornecedores 12',
            'Fornecedores 13',

        ]; // Atribuição de valor ao array
        // return view('admin.fornecedores.index', compact('fornecedores'));
        return view('site.fornecedores', compact('fornecedores'));
    }
}