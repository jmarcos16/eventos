<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = ['Matheus', 'Jose', 'Antonio'];

        return view('products',['nome' => $nome]);
    }
}
