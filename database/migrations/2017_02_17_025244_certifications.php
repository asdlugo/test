<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Certifications.
 *
 * @author  The scaffold-interface created at 2017-02-17 02:52:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Certifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('certifications',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('date_issue');
        
        $table->date('date_epiration');
        
        $table->boolean('certification_status');
        
        $table->String('certification_serial');
        
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
        Schema::drop('certifications');
    }
}
