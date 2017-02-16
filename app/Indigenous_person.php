<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Indigenous_person.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:09:04pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Indigenous_person extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'indigenous_peoples';

	
}
