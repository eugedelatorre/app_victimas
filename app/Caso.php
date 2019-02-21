<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Delito;
use App\Cavaj;
class Caso extends Model
{
  public $table="casos";
  public $timestamps=false;
  public $guarded=[];

  public function delitos() {
    return $this->belongsToMany(Delito::class,"caratulas","caso_id","delito_id");
  }

  public function cavajs() {
    return $this->belongsToMany(Cavaj::class,"caso_cavaj","caso_id","cavaj_id");
  }

  public function delitosIds() {
    return $this->delitos->pluck("id");
  }

  public function cavajsIds() {
    return $this->cavajs->pluck("id");
  }



}
?>
