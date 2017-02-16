<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Production_units.
 *
 * @author  The scaffold-interface created at 2017-02-16 07:45:09pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProductionUnits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('production_units',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('number_document_earth');
        
        $table->String('name_production_unit');
        
        $table->integer('total_surface');
        
        $table->integer('usable_surface');
        
        $table->integer('surface_used');
        
        $table->integer('production_unit_clasification');
        
        $table->boolean('export');
        
        $table->boolean('import_need');
        
        $table->boolean('attached_agency');
        
        $table->integer('agency_type');
        
        $table->String('agency_name');
        
        $table->integer('agency_rif');
        
        $table->boolean('depart_quality_control');
        
        $table->boolean('depart_investigation');
        
        $table->boolean('pilot_plan');
        
        $table->boolean('community_participation');
        
        $table->boolean('sica_registred');
        
        $table->boolean('sunagro');
        
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
        Schema::drop('production_units');
    }
}
