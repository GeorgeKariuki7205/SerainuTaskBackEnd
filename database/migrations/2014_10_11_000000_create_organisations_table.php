<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->longText('name_of_organisation');
            $table->longText('description');
            $table->text('country');
            $table->text('address');
            $table->text('points_person_name');
            $table->text('points_person_phone_number');
            $table->text('points_person_phone_email');
            $table->date('contract_start_date');
            $table->date('contract_end_date');
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
        Schema::dropIfExists('organisations');
    }
}
