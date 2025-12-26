<?php


namespace App\Repositories;


use App\Models\Post;
use App\Repositories\Interfaces\PostsInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PostsRepository implements PostsInterface
{
    public function __construct(private Post $post) {}

    public function getPosts(): Collection
    {
        return $this->post->with('images')->get();
    }

    public function getPostById(int $id): ?Model
    {
        return $this->post->with('images')->find($id);
    }
}
