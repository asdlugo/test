<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Person_person.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:30:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Person_person extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'person_people';

	
}
