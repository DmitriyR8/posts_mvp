<?php


namespace App\Http\Resources\V1;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'postId' => $this->resource->id,
            'timestamp' => Carbon::parse($this->resource->created_at)->timestamp ?? '',
            'title' => $this->resource->title ?? '',
            'preview_text' => $this->resource->description ?? '',
            'likes_count' => $this->resource->likes_count ?? 0
        ];
    }
}
