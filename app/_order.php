<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _order extends Model
{
	protected $fillable=['user_id','logistics_id','repository_id','payment_method','order_condition','create_date'];

    //
}
