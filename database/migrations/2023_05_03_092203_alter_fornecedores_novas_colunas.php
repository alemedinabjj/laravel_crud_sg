<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('fornecedores', function (Blueprint $table) { //seleciona a tabela fornecedores
            $table->string('uf', 2); //cria a coluna uf
            $table->string('email', 100); //cria a coluna email
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // rollback das colunas php artisan migrate:rollback --step=1
        Schema::table('fornecedores', function (Blueprint $table) { //seleciona a tabela fornecedores
            $table->dropColumn('uf'); //deleta a coluna uf
            $table->dropColumn('email'); //deleta a coluna email
            //$table->dropColumn(['uf', 'email']); //deleta as colunas uf e email
        });
    }
}
