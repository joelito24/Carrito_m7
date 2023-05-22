<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tag',      
    ];

    public static function getRules($item = null)
    {
        $rules = [
            'tag'              => 'required',
        ];

        return $rules;
    }

    public function posts(){
        return $this->belongsToMany(Post::class, 'posts_has_tags', 'tag_id', 'post_id');
    }
}