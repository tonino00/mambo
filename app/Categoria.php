<?php

namespace mambo;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function projetos() {
    	return $this->hasMany('mambo\Projetos');
    }
}
