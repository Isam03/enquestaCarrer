<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquesta;
use App\Models\Enquestador;
use App\Models\Pregunta;

class preguntaenquestaController extends Controller
{
    public function index()
    {
        $enquestas = (new Enquesta())->getAll();
        $preguntas = (new Pregunta())->getAll();
        return view('enquesta.edit', compact('preguntas','enquestas'));
    }

    public function edit(string $id)
    {
        //no s'utilitza pas
        $pregunta = (new Pregunta())->getById($enquesta_id);
        $enquesta = (new Enquesta())->getById($id);
        return view('enquesta.edit', compact('pregunta','enquesta'));
    }
}
