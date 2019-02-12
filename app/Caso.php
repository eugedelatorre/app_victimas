<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Delito;
<<<<<<< HEAD
use App\Cavaj;
=======
>>>>>>> 7d1ed7c695470c431055bcae88ee9c2d1e5ee997
class Caso extends Model
{
  public $table="casos";
  public $primarykey="id_casos";
  public $timestamps=false;
  public $guarded=[];

  public function delitos() {
  return $this->belongsToMany(Delito::class,"caratulas","caso_id","delito_id");
  }
<<<<<<< HEAD

  public function cavajs() {
  return $this->belongsToMany(Cavaj::class,"caso_cavaj","caso_id","cavaj_id");
  }

  public function personas() {
  return $this->belongsToMany(Persona::class,"caso_persona","caso_id","persona_id");
  }
=======
>>>>>>> 7d1ed7c695470c431055bcae88ee9c2d1e5ee997
}
