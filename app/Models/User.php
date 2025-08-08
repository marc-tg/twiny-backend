<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $keyType = 'bigInteger';
    public $timestamps = false;

    protected $fillable = ['name', 'username', 'email', 'password', 'bio'];

   

}
