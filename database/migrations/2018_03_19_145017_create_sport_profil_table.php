<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_profil', function (Blueprint $table) {
            $table->integer('profil_id')->unsigned()->index();
			$table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade')->onUpdate('cascade');
			
			$table->integer('sport_id')->unsigned()->index();
			$table->foreign('sport_id')->references('id')->on('sports')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sport_profil');
		
    }
}
