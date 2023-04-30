<?php

namespace App\Models;

use App\Http\Controllers\EnquestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\OpcioController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquesta extends Model
{
    protected $fillable = [
        'nom',
        'descripcio',
        'data',
    ];

    public function getAll(){

        return Enquesta::all();
    }

    public function getById($id)
    {
        return Enquesta::find($id);
    }

    public function preguntes()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function opcions()
    {
        return $this->hasMany(Opcio::class);
    }
}
