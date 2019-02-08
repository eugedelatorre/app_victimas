<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Delito;
class Caso extends Model
{
  public $table="casos";
  public $primarykey="id_casos";
  public $timestamps=false;
  public $guarded=[];

  public function delitos() {
  return $this->belongsToMany(Delito::class,"caratulas","caso_id","delito_id");
  }
}
