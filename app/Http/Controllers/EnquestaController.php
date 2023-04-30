<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use App\Models\Enquesta;
use App\Models\Pregunta;

use App\Http\Requests\Enquesta\StoreRequest;
use App\Http\Requests\Enquesta\UpdateRequest;

class EnquestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquestas = (new Enquesta())->getAll();
        $preguntas = (new Pregunta())->getAll();
        return view('dashboard', compact('enquestas','preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('enquesta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $request->validate([
            'nom' => 'required',
            'descripcio' => 'required',
            'data' => 'required',
        ]);
    
        $enquesta = new Enquesta([
            'nom' => $request->get('nom'),
            'descripcio' => $request->get('descripcio'),
            'data' => $request->get('data'),
        ]);
    
        $enquesta->save();
    
        return redirect('/dashboard')->with('success', 'Enquesta creada correctament.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('enquesta.show', [
            'enquesta' => Enquesta::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $enquesta = (new Enquesta())->getById($id);
        // $preguntes = Pregunta::where('enquesta_id', $enquesta->id)->get();

        $enquesta = Enquesta::findOrFail($id);
        $preguntas = $enquesta->preguntes;
        return view('enquesta.edit', compact('enquesta', 'preguntas'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'nullable',
            'descripcio' => 'nullable',
            'data' => 'nullable',
        ]);
        
        $enquesta = (new Enquesta())->getById($id);
        
        $enquesta->update([
            'nom' => $request->nom ? $request->nom : $enquesta->nom,
            'descripcio' => $request->descripcio ? $request->descripcio : $enquesta->descripcio,
            'data' => $request->data ? $request->data : $enquestador->data,
        ]);
    
        $enquesta->save();

        return redirect('/dashboard')->with('success', 'Enquesta actualitzada correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enquesta = (new Enquesta())->getById($id);

        $enquesta->delete();

        return redirect('/dashboard')->with('success', 'Enquesta eliminada');
    }
}
