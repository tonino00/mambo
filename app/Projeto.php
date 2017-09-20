<?php

namespace mambo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Projeto extends Model
{
	protected $table = 'projetos';
    public $timestamps = false;

    protected $fillable = ['nome', 'data_inicio', 'data_fim', 'valor', 'horas', 'categoria_id'];

    public function categoria() {
    	return $this->belongsTo('mambo\Categoria');
    }
}
