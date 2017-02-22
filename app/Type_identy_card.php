<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Type_identy_card.
 *
 * @author  The scaffold-interface created at 2017-02-17 03:52:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Type_identy_card extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'type_identy_cards';

	
}
