<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Social_network.
 *
 * @author  The scaffold-interface created at 2017-02-15 09:01:07pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Social_network extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'social_networks';

	
}
