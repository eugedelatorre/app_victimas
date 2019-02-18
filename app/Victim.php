<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Necesidad;
use App\Programa;
use App\Discapacidad;
use App\Limitacion;

class Victim extends Model
{
public $table="victims";
  public $timestamps=false;
  public $guarded=[];
  public function necesidades() {
    return $this->belongsToMany(Necesidad::class,"victima_necesidad","victima_id","necesidad_id");
  }

  public function programas() {
    return $this->belongsToMany(Programa::class,"victima_programa","victima_id","programa_id");
  }

  public function discapacidades() {
    return $this->belongsToMany(Discapacidad::class,"victima_discapacidad","victima_id","discapacidad_id");
}
    public function limitaciones() {
      return $this->belongsToMany(Limitacion::class,"victima_limitacion","victima_id","limitacion_id");
    }

}
?>
