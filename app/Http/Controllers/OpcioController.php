<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opcio;


class OpcioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo("index del controlador opcio");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo("create del controlador opcio");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo("puja un opcio");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo("mostrar opcio concret");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo("editar opcio concreta del controlador opcio");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo("update del controlador opcio");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo("delete del controlador opcio");
    }
}
