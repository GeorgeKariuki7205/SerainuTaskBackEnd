<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVECThreatIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvec_threat_indicators', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();            
            $table->string('uniqueIdentifier');
            $table->mediumText('name');
            $table->longText('description')->nullable();


            $table->bigInteger('indicatorsId')->unsigned();
            $table->foreign('indicatorsId')->references('id')->on('indicators')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('cvec_threat_indicators');
    }
}
