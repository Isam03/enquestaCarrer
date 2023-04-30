<?php

namespace App\Models;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\EnquestaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descripcio',
        'enquesta_id',
        'tipus',
        'valorRangA',
        'valorRangB',
    ];

    public function getAll()
    {
        return Pregunta::all();
    }

    public function getById($id)
    {
        return Pregunta::find($id);
    }

    public function enquesta(): BelongsTo
    {
        return $this->belongsTo(Enquesta::class);
    }
}
