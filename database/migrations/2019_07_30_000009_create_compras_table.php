<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'compras';

    /**
     * Run the migrations.
     * @table compras
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->bigInteger('numeroPedido')->nullable();
            $table->string('comprador', 200)->nullable();
            $table->string('compraRealizada', 200)->nullable();
            $table->decimal('preco', 10, 2)->nullable();
            $table->string('modoPagamento', 50)->nullable();
            $table->date('dataCompra')->nullable();
            $table->unsignedInteger('usuarios_id');

            $table->index(["usuarios_id"], 'fk_compra_usuarios1_idx');

            $table->unique(["id"], 'id_UNIQUE');


            $table->foreign('usuarios_id', 'fk_compra_usuarios1_idx')
                ->references('id')->on('usuarios')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
