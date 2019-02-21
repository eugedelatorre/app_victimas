<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
  public $table="profesionales";
  public $timestamps=false;
  public $guarded=[];

  public function usuario() {
    return $this->belongsTo(Usuario::class, "nombre_profesional_interviniente");
  }

}
