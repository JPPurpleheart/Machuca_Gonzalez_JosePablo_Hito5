<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despensa extends Model
{
    protected $fillable = [
        'categoria',
        'nombre',
        'stock',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/despensas/'.$this->getKey());
    }
}
