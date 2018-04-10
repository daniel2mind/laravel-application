<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locator',100)->comment('Nome do locator');
            $table->string('function',100)->comment('Nome da função no locator');
            $table->string('titulo',100)->nullable()->comment('Ex: Cadastro de usuários');
            $table->string('descricao',200)->nullable()->comment('Ex: Adicionar usuário');
            $table->boolean('controle')->default(0)->comment('0-> não realiza controle de permissão, 1->realiza controle. Ex: logout não realiza controle, cadastro de usuário realiza controle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissoes');
    }
}
