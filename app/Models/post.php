<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'user_id'];

     // Relación muchos a uno (Post pertenece a un User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a muchos (Post tiene muchas Tags)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
