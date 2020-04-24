<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sop_catagory_id');
            $table->integer('sop_subcatagory_id');
            $table->integer('sop_type_id');
            $table->integer('service_type_id');
            
            $table->string('execution');
            $table->string('sla');
            $table->string('communication');
            $table->tinyinteger('frequently_used');
            $table->string('file');
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
        Schema::dropIfExists('sops');
    }
}
