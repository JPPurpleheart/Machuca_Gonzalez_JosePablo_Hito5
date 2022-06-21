<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ropero extends Model
{
    protected $fillable = [
        'nombre',
        'color',
        'estado',
        'talla',
        'categoria',
        'id_usuario',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/roperos/'.$this->getKey());
    }
}
