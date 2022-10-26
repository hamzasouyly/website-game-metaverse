<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClassIdColumnToSpelles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Spells', function (Blueprint $table) {
            //
            $table->foreignId('classes_id')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Spells', function (Blueprint $table) {
            //
            $table->dropForeign(['classes_id']);
            $table->dropColumn('classes_id');
        });
    }
}
