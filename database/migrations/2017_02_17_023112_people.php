<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class People.
 *
 * @author  The scaffold-interface created at 2017-02-17 02:31:12pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class People extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('people',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('first_name');
        
        $table->String('second_name');
        
        $table->String('first_surname');
        
        $table->String('second_surname');
        
        $table->String('social_reason');
        
        $table->String('identy_card');
        
        $table->date('date_born');
        
        $table->integer('gender_person');
        
        $table->integer('civil_state');
        
        $table->integer('degree_instructio');
        
        $table->boolean('lives_production_unity');
        
        $table->String('address_domicile');
        
        $table->String('number_local');
        
        $table->String('number_mobile');
        
        $table->String('email');
        
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
        Schema::drop('people');
    }
}
