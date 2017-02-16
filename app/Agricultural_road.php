<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agricultural_road.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:49:49pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Agricultural_road extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'agricultural_roads';

	
}
