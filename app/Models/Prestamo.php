<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = [
        'id_libro',
        'usuario_prestamo',
        'fechaInicio',
        'fechaFin',
    
    ];
    
    
    protected $dates = [
        'fechaInicio',
        'fechaFin',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/prestamos/'.$this->getKey());
    }
}
