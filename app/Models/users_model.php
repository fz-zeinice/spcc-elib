<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class users_model extends Model
{
    protected $primaryKey = 'usr_id';
    protected $table = 'users';
    public $timestamps = false;

    public static function authenticate($credentials)
    {
        $user = self::where('usr_email', $credentials['email'])->first();
        if(!$user || !Hash::check($credentials['password'], $user->usr_password))
        {
            return null;
        }

        return $user;
    }
}
