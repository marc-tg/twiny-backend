<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Post extends Model 
{
        use HasFactory, Notifiable; // <-- HasFactory aquí

    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = ['user_id', 'content', 'image'];

   

}
