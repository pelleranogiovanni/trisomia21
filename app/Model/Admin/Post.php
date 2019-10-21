<?php

namespace App\Model\Admin;

use App\Model\Admin\User;
use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Taggable;
    
    protected $fillable = [
        'titulo',
        'contenido',
        'extracto',
        'likes',
        'dislikes',
        'user_create_id',
        'user_modified_id',
        'imagen_id',
        'slug',
        'estado']; 

    public function user_create(){
        return $this->belongsTo(User::class, 'user_create_id', 'id');
    }

    public function user_modified(){
        return $this->belongsTo(User::class, 'user_modified_id', 'id');
    }

    public function imagen(){
        return $this->belongsTo(Imagen::class);
    }
}
