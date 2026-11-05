<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $post = Post::query()->paginate(10);

        return response()->json([
            'data' => $post->items,
            'meta' => [
                'current_page' => $post->currentPage(),
                'last_page' => $post->lastPage(),
                'per_page' => $post->perPage(),
                'totales' => $post->total(),
            ]
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $post = Post::query()->find($id);

        if (!$post) {
            return response()->json([
                'message' => "Пост не найден!"
            ], 404);
        }

        return response()->json([
            'data' => $post
        ]);
    }
}
