<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Machineries.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:44:28pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Machineries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('machineries',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('description');
        
        $table->boolean('status');
        
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
        Schema::drop('machineries');
    }
}
