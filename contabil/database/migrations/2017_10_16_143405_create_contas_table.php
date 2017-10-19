<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Conta;
use App\Categoria;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao');
            $table->timestamps();
        });

        Schema::create('contas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao');
            $table->timestamp('data')->useCurrent = true;
            $table->integer('id_categoria')->length(10)->unsigned();
            $table->float('valor', 8, 2);
            $table->unsignedInteger('id_tipo_conta');
            $table->timestamps();            
        });

        Schema::table('contas', function($table) {
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas');
        Schema::dropIfExists('categorias');        
    }
}
