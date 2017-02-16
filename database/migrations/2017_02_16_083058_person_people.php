<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Person_people.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:30:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PersonPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('person_people',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('family_relationship');
        
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
        Schema::drop('person_people');
    }
}
