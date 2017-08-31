<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AplicacaoController extends Controller
{
    public function getIndex() {
        return view('aplicacao.layout.master');
    }
}
