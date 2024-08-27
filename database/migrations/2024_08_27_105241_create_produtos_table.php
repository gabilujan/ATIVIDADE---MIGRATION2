<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Cria a coluna ID como auto-incremento
            $table->string('nome'); // Coluna nome do tipo string
            $table->text('descricao'); // Coluna descrição do tipo text
            $table->integer('peso'); // Coluna peso do tipo integer
            $table->float('preco', 8, 2); // Coluna preco do tipo float com precisão
            $table->integer('estoque'); // Coluna estoque do tipo integer
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
