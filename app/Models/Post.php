<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model{
    use HasFactory; //don't forget !
    protected $fillable = ['title','author','slug','body'];
    protected $with = ['author','category'];//

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

public function scopeFilter($query, array $filters){
    if ($filters['category'] ?? false) {
        $query->whereHas('category', function ($query) use ($filters) {
            $query->where('slug', $filters['category']);
        });
    }

    if ($filters['author'] ?? false) {
        $query->whereHas('author', function ($query) use ($filters) {
            $query->where('username', $filters['author']);
        });
    }

    if ($filters['search'] ?? false) {
        $query->where('title', 'like', '%' . $filters['search'] . '%');
    }
}
}
?>