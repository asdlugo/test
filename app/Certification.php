<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Certification.
 *
 * @author  The scaffold-interface created at 2017-02-17 02:52:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Certification extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'certifications';

	
}
