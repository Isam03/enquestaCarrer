<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquesta;
use App\Models\Enquestador;

class dashboardController extends Controller
{
    public function index()
    {
        $enquestas = (new Enquesta())->getAll();
        $enquestadors = (new Enquestador())->getAll();
        return view('dashboard', compact('enquestadors','enquestas'));
    }
}
