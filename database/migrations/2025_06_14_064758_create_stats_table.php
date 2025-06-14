<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
{
    Schema::create('stats', function (Blueprint $table) {
        $table->id();
        $table->integer('students_helped')->default(0);
        $table->integer('programs_offered')->default(0);
        $table->integer('institutions')->default(0);
        $table->integer('countries')->default(0);
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
        Schema::dropIfExists('stats');
    }
}
