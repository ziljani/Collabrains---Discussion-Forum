<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function followings(){
        return $this->hasMany('App\Models\Following');
    }
}
