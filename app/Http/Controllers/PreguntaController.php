<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquesta;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquestas = (new Enquesta())->getAll();
        $preguntas = (new Pregunta())->getAll();
        return view('enquesta.edit', compact('enquestas','preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo("create del controlador pregunta");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcio' => 'required',
            'enquesta_id' => 'required',
            'tipus' => 'required',
            'valorRangA' => 'nullable',
            'valorRangB' => 'nullable',
        ]);
    
        $pregunta = new Pregunta([
            'descripcio' => $request->get('descripcio'),
            'enquesta_id' => $request->get('enquesta_id'),
            'tipus' => $request->get('tipus'),
            'valorRangA' => $request->get('valorRangA'),
            'valorRangB' => $request->get('valorRangB'),
        ]);
    
        $pregunta->save();
    
        return redirect('enquesta/'. $pregunta->enquesta_id)->with('success', 'Pregunta afegida correctament.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo("mostrar pregunta concret");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pregunta = (new Pregunta())->getById($id);
        return view('enquesta.edit', compact('pregunta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo("update del controlador pregunta");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pregunta = (new Pregunta())->getById($id);

        $pregunta->delete();

        return redirect('enquesta/'. $pregunta->enquesta_id)->with('success', 'Pregunta eliminada correctament.');
    }
}
