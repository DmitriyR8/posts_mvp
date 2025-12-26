<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostsResourceCollection;
use App\Repositories\Interfaces\PostsInterface;

class PostController extends Controller
{
    public function __construct(protected PostsInterface $posts) {}

    public function getPosts()
    {
        return response()->json(['posts' => PostsResourceCollection::make($this->posts->getPosts())]);
    }

    public function getPostById(int $id)
    {
        return response()->json(['post' => PostResource::make($this->posts->getPostById($id))]);
    }
}
