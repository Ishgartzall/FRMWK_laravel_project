<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Category extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name','description','slug'];

    public function posts(): HasMany{
        return $this->hasMany(Post::class,'category_id');
    }
}