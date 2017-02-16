<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Appointments.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:30:15pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Appointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('appointments',function (Blueprint $table){

        $table->increments('id');
        
        $table->boolean('appointment_status');
        
        $table->date('star_date');
        
        $table->date('finish_date');
        
        $table->String('observation');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('appointments');
    }
}
