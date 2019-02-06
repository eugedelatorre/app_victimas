<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona_Asistida extends Model
{
  public $table="personas_asistidas";
  public $primarykey="id_personas_asistidas";
  public $timestamps=false;
  public $guarded=[];
}
