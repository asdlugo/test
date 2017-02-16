<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Type_document_earth.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:50:53pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Type_document_earth extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'type_document_earths';

	
}
