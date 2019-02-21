<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Oarticula;
use App\Oprevio;
use App\Socioeconomico;
class Institucion extends Model
{
  public $table="instituciones";
  public $timestamps=false;
  public $guarded=[];

  public function oarticulas() {
  return $this->belongsToMany(Oarticula::class,"institucion_oarticula","institucion_id","oarticula_id");
  }

  public function oprevios() {
  return $this->belongsToMany(Oprevio::class,"institucion_oprevio","institucion_id","oprevio_id");
}

public function socioeconomicos() {
return $this->belongsToMany(Socioeconomico::class,"institucion_socioeconomico","institucion_id","socioeconomico_id");
}


}
?>
