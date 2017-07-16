<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function alergias()
    {
      return $this->belongsToMany('App\Alergia');
    }
}
