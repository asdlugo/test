<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Person.
 *
 * @author  The scaffold-interface created at 2017-02-17 02:31:12pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Person extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'people';

	
}
