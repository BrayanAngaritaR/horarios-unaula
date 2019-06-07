<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisponibilidadAula extends Model
{

	protected $fillable = [
		'salon', 'dia', 'entrada',
		'salida', 'grupo', 'nombre_profesor',
		'nombre_materia', 'codigo_materia',
	];

}
