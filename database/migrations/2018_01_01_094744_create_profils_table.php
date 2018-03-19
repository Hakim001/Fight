<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned()->nullable()->index();
			$taille->float('taille', 4, 2)->unsigned()->nullable()->index();
			$table->string('poids')->nullable()->index();
			$table->string('telephone')->nullable();
			$table->string('adresse')->nullable();
			$table->string('ville')->nullable()->index();
			$table->string('pays')->nullable()->index();
			$table->enum('sexe', ['homme', 'femme'])->nullable()->index();
			$table->string('sport')->nullable()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profils');
    }
}
