<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folleto extends Model
{
    protected $fillable = [
        'id_usuario',
        'fecha',
        'cantidad_entregada',
        'tipo_folleto',
    
    ];
    
    
    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/folletos/'.$this->getKey());
    }
}
