<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends 
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $keyType = 'bigInteger';
    public $timestamps = false;

    protected $fillable = ['name', 'username', 'email', 'password', 'bio'];

   

}
