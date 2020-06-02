<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable= [
    	'customer_id',
    	'company',
    	'bank_acc_number'
    ];
}
