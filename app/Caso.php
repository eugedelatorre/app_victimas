<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
  public $table="casos";
  public $primarykey="id_casos";
  public $timestamps=false;
  public $guarded=[];
}
