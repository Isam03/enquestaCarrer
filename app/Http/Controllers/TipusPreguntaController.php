<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipusPreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo("index del controlador TipusPregunta");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo("create del controlador TipusPregunta");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo("puja un TipusPregunta");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo("mostrar TipusPregunta concret");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo("editar TipusPregunta concreta del controlador TipusPregunta");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo("update del controlador TipusPregunta");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo("delete del controlador TipusPregunta");
    }
}
