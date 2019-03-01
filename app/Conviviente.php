<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conviviente extends Model
{
  public $table="convivientes";
  public $timestamps=false;
  public $guarded=[];

  public function caso() {
    return $this->belongsTo(Caso::class,"IdCaso");
  }


}

?>
