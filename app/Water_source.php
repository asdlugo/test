<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Water_source.
 *
 * @author  The scaffold-interface created at 2017-02-15 09:12:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Water_source extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'water_sources';

	
}
