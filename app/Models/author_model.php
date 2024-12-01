<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class author_model extends Model
{
    protected $primaryKey = 'aut_id';
    protected $table = 'authors';
    public $timestamps = false;

}
