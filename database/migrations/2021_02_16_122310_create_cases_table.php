<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
           
            $table->string('case_entry');        
            $table->string('case_type');
            $table->string('case_desc');
            $table->string('direct_name');
            $table->string('case_emp_note');
            $table->string('case_status');
            $table->string('case_priority');
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
