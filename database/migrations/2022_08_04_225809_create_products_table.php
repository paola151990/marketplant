<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('categoria_id');
             $table->unsignedBigInteger('user_id');
            $table->text('descripcion');
            $table->string('precio');
            $table->string('cantidad');
            $table->text('usos');
            $table->text('preparacion');
            $table->text('beneficios');
            $table->text('cuidados');
            $table->string('ubicacion');
            $table->string('tiempo_germinacion');
            $table->string('imagen');
            $table->timestamps();
           
          $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
         $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
