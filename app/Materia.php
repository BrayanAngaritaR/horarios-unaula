<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
   protected $fillable = [
		'codigo',
		'name',
	];
}
