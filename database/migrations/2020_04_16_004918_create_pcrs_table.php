<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcrs', function (Blueprint $table) {
            $table->id();
            $table->integer('depertment_id');
            $table->string('stakeholder_name');
            $table->string('stakeholder_number');
            $table->string('request_type');
            $table->date('submission_date');
            $table->date('request_by_date');
            $table->tinyinteger('urgency');
            $table->string('process_name')->nullable();
            $table->string('process_version')->nullable();
            $table->string('change_objective');

            $table->tinyinteger('approval_status')->nullable();
            $table->string('cpm_remarks')->nullable();

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
        Schema::dropIfExists('pcrs');
    }
}
