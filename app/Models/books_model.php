<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books_model extends Model
{
    protected $primaryKey = 'bk_id';
    protected $table = 'books';
    public $timestamps = false;
}
