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
        'likes',
        'dislikes',
        'categoria_id',
        'user_create_id',
        'user_modified_id',
        'imagen_id',
        'slug',
        'estado'];

    // public function tags(){
    //     return $this->belongsToMany(Tag::class);
    // }    

    public function user_create(){
        return $this->belongsTo(User::class, 'user_create_id', 'id');
    }

    public function user_modified(){
        return $this->belongsTo(User::class, 'user_modified_id', 'id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function imagen(){
        return $this->belongsTo(Imagen::class);
    }
}
