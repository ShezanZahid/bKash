<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovedprocessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('process_catagory_id');
            $table->string('name');
            $table->date('circulation_date');
            $table->string('version');
            $table->string('approved_file');
            $table->string('signed_file');
            $table->string('working_file');
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
        Schema::dropIfExists('approved_processes');
    }
}
