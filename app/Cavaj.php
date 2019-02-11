<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;
class Cavaj extends Model
{
  public $table="cavajs";
  public $timestamps=false;
  public $guarded=[];

  public function casos() {
    $this->belongsToMany(Caso::class,"caratulas","cavaj_id","caso_id");
  }
}
