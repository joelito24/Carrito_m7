<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'post_id',
        'user_id',        
    ];

    public static function getRules($item = null)
    {
        $rules = [
            'comment'              => 'required',
            'post_id'             => 'required',
            'user_id'              => 'required',
        ];

        return $rules;
    }

    public function users(){
        return $this->HasOne(User::class, 'id', 'user_id');
    }

    public function posts(){
        return $this->HasOne(Post::class, 'id', 'post_id');
    }
}