<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $fillable = [
        'nombre',
        'codigoPostal'
    ];

    public function Barrio()
    {
        return $this->hasMany(Barrio::class);
    }
}
