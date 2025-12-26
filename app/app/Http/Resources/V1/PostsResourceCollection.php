<?php


namespace App\Http\Resources\V1;


use Illuminate\Http\Resources\Json\ResourceCollection;

class PostsResourceCollection extends ResourceCollection
{
    public $collects = PostsResource::class;
}
