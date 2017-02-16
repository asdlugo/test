<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Popular_organization.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:22:34pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Popular_organization extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'popular_organizations';

	
}
