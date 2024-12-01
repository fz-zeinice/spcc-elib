<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booktypes_model extends Model
{
    protected $primaryKey = 'bt_id';
    protected $table = 'book_types';
    public $timestamps = false;
}
