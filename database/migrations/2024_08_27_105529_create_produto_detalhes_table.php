<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('produto_id'); 
            $table->float('comprimento'); 
            $table->float('largura'); 
            $table->float('altura'); 
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade'); // Chave estrangeira
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
        Schema::dropIfExists('produto_detalhes');
    }
}
