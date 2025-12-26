<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'description', 'likes_count'];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'post_id', 'id');
    }
}
