<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    
    use HasFactory, Notifiable; // <-- HasFactory aquí

    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $timestamps = true;

    protected $fillable = ['post_id','user_id', 'content'];

   
public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function post()
{
    return $this->belongsTo(Post::class, 'post_id');
}
}
