<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    protected $with = ['author', 'category'];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearch(Builder $query, array $searches): void {
        $query->when($searches['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%'. $search .'%')
        );

        $query->when($searches['category'] ?? false, 
            fn($query, $category) => 
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );

        $query->when($searches['author']?? false, 
            fn($query, $author) => 
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
}
