<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Enquestador;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use MongoDB\BSON\ObjectId;
use MongoDB\Client;


class EnquestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquestadors = (new Enquestador())->getAll();
        return view('dashboard', compact('enquestadors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        echo("create del controlador enquestador");
        $enquestadors = (new Enquestador())->getAll();
        return view('dashboard', compact('enquestadors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo("puja un enquestador");
        $request->validate([
            'nom' => 'required',
            'localitzacio' => 'required',
            'password' => 'required',
        ]);
    
        $enquestador = new Enquestador([
            'nom' => $request->get('nom'),
            'localitzacio' => $request->get('localitzacio'),
            'password' => $request->get('password'),
        ]);
    
        $enquestador->save();
    
        return redirect('/dashboard')->with('success', 'Enquestador afegit correctament.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo("mostrar enquestador concret");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //no s'utilitza pas
        echo("editar enquestador concreta del controlador enquestador");
        $enquestador = (new Enquestador())->getById($id);
        return view('dashboard', compact('enquestador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'nullable',
            'localitzacio' => 'nullable',
            'password' => 'nullable',
        ]);
        
        $enquestador = (new Enquestador())->getById($id);
        
        $enquestador->update([
            'nom' => $request->nom ? $request->nom : $enquestador->nom,
            'localitzacio' => $request->localitzacio ? $request->localitzacio : $enquestador->localitzacio,
            'password' => $request->password ? $request->password : $enquestador->password,
        ]);
    
        $enquestador->save();

        return redirect('/dashboard')->with('success', 'Enquestador actualitzat correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo("delete del controlador enquestador");

        $enquestador = (new Enquestador())->getById($id);

        $enquestador->delete();

        return redirect('/dashboard')->with('success', 'Enquestador eliminat');
    }
}
