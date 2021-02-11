<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualities', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('title')->comment('Titre principal');
            $table->string('content')->comment('Contenu de l\'actualité');
            $table->string('picture_url')->comment('Lien image');
            $table->string('link_url')->comment('Lien vers src externe');

            $table->integer('category_id')->nullable()->comment('Identifiant de la categorie d\'une news');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualities');
    }
}
