<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorRemediationActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_remediation_activities', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->bigInteger('indicatorsId')->unsigned();
            $table->foreign('indicatorsId')->references('id')->on('indicators')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('description');
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
        Schema::dropIfExists('indicator_remediation_activities');
    }
}
