<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Building.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:33:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Building extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'buildings';

	
}
