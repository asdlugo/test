<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Production_destiny.
 *
 * @author  The scaffold-interface created at 2017-02-15 09:04:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Production_destiny extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'production_destinies';

	
}
