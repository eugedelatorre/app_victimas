<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delito extends Model
{
  public $table="delitos";
  public $timestamps=false;
  public $guarded=[];
}
