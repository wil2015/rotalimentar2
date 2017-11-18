<?php

namespace rota2;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //

    protected $table = 'produtos';
    
    
    protected $fillable = ['title','image'];
}
