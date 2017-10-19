<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id');
    }
}
