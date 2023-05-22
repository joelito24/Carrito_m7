<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'cont',
        'user_id',        
    ];

    public static function getRules($item = null)
    {
        $rules = [
            'title'              => 'required',
            'cont'             => 'required',
            'user_id'              => 'required',
        ];

        return $rules;
    }

    public function users(){
        return $this->HasOne(User::class, 'id', 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'post_id' ,'id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'posts_has_tags', 'post_id', 'tag_id');
    }
}