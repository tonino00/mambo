<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaRelProjetoCategoria extends Migration
{

    public function up()
    {
        Schema::table('projetos', function(Blueprint $table)
        {
            $table->integer('categoria_id')->default(1);
        });
    }


    public function down()
    {
        Schema::table('projetos', function(Blueprint $table)
        {
            $table->dropCollum('categoria_id');
        });
    }
}
