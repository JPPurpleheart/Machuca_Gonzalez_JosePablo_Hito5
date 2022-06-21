<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    protected $fillable = [
        'email',
        'name',
        'num_miembros',
        'phone',
        'surname',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/registered-users/'.$this->getKey());
    }
}
