<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {
  protected $fillable = ["especialidad", "obra_social", "direccion"];
}
