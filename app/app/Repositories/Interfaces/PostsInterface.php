<?php


namespace App\Repositories\Interfaces;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface PostsInterface
{
    public function getPosts(): Collection;
    public function getPostById(int $id): ?Model;
}
