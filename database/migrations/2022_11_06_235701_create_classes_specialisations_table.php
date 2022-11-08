<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesSpecialisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_specialisations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('classes_id')->unsigned();
            $table->unsignedBiginteger('specialisation_id')->unsigned();
            $table->foreign('classes_id')->references('id')
                 ->on('classes')->onDelete('cascade');
            $table->foreign('specialisation_id')->references('id')
                ->on('specialisations')->onDelete('cascade');
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
        Schema::dropIfExists('classes_specialisations');
    }
}
