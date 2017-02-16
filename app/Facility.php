<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Facility.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:41:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Facility extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'facilities';

	
}
