<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction_model extends Model
{
    protected $primaryKey = 'trans_id';
    protected $table = 'transaction';
    public $timestamps = false;
}
