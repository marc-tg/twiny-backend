<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // <- cambia aquí
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;  // <--- Importa esto

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;  // <--- Usa el trait aquí

    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = ['name', 'username', 'email', 'password', 'bio'];
}
