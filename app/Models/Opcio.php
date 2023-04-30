<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EnquestaController;
use App\Http\Controllers\OpcioController;
use App\Http\Controllers\PreguntaController;

class Opcio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'valor',
        'enquesta_id',
        'pregunta_id',
    ];

    public function getAll()
    {
        return Opcio::all();
    }

    public function getById($id)
    {
        return Opcio::find($id);
    }

    public function enquesta(): BelongsTo
    {
        return $this->belongsTo(Opcio::class);
    }
}
