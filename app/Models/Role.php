<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'rol',      
    ];

    public static function getRules($item = null)
    {
        $rules = [
            'rol'              => 'required',
            'description'      => 'required',
        ];

        return $rules;
    }

    public function users(){
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}