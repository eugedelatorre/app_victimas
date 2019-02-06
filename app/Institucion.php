<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    public $table="instituciones";
    public $primarykey="id_instituciones";
    public $timestamps=false;
    public $guarded=[];

    public function cavaj() {
      
    }
}
