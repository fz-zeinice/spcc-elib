<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class status_model extends Model
{
    protected $primaryKey = 'sts_id';
    protected $table = 'status';
    public $timestamps = false;
}
