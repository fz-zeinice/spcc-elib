<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booklogs_model extends Model
{
    protected $primaryKey = 'bl_id';
    protected $table = 'book_logs';
    public $timestamps = false;
}
