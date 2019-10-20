<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'descripcion', 'slug'];

    public function posts(){
    	return $this->hasMany(Post::class);
    }
}
