<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Institute.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:47:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Institute extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'institutes';

	
}
