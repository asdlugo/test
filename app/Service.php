<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service.
 *
 * @author  The scaffold-interface created at 2017-02-15 04:30:43pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Service extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'services';

	
}
