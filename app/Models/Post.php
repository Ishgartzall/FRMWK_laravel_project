<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model{
    use HasFactory; //don't forget !
    protected $fillable = ['title','author','slug','body'];
}
?>