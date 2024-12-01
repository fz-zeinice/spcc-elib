<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transactiondetails_model extends Model
{
    protected $primaryKey = 'tdet_id';
    protected $table = 'transaction_details';
    public $timestamps = false;
}
