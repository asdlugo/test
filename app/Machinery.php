<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Machinery.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:44:28pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Machinery extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'machineries';

	
}
