<?php

namespace App\Models;

use App\Http\Controllers\EnquestadorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;




class Enquestador extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'nom',
        'localitzacio',
        'password',
    ];

    public function getAll()
    {
        return Enquestador::all();
    }

    public function getById($id)
    {
        return Enquestador::find($id);
    }

    

    
}
