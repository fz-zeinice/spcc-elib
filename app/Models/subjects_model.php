<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subjects_model extends Model
{
    protected $primaryKey = 'subj_id';
    protected $table = 'subjects';
    public $timestamps = false;
}
