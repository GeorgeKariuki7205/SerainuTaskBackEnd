<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVECThreatIndicatorValidatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvec_threat_indicator_validated', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->float('validatedValue');
            $table->bigInteger('cvectThreatIndicatorID')->unsigned();
            $table->foreign('cvectThreatIndicatorID')->references('id')->on('cvec_threat_indicators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cvec_threat_indicator_validated');
    }
}
