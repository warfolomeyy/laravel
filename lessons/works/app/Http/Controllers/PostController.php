<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function Laravel\Prompts\search;

class PostController extends Controller
{

    public function __construct(
        private postRepositoryInterface $post
    )
    {
    }

    public function index(Request $request): View
    {
        $posts = $this->posts->getPublishedPaginated($request->get('q'), perPage: 4);

        return view('posts.index', compact('posts'));
    }


    public function show(Post $post): View
    {
        $post = $this->posts->findPublishedBySlugOrFail($post->slug);

        return view('posts.show', compact('post'));
    }
}
