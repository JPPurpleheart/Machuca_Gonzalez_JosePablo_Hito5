<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recibe extends Model
{
    protected $fillable = [
        'id_usuario',
        'id_producto',
        'fecha',
        'stock',
    
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
        return url('/admin/recibes/'.$this->getKey());
    }
}
