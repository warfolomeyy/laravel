@extends('layouts.app')

@section('title', 'Блог на Laravel 12')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach($posts as $post)
            <article class="group relative overflow-hidden rounded-2xl border border-white/10 bg-gray-900/40 p-5 shadow transition hover:-translate-y-1 hover:shadow-lg hover:shadow-fuchsia-500/10">
                <a aria-label="Читать далее" href="{{ route('blog.show', $post->slug) }}" class="absolute inset-0 z-10"></a>

                <div class="flex flex-col gap-3">
                    <div class="text-xs uppercase tracking-wide text-gray-400">
                        {{ $post->published_at?->format('d.m.Y') }}
                    </div>

                    <h3 class="text-xl font-semibold leading-tight text-white">
                        {{ $post->title }}
                    </h3>

                    <p class="text-gray-300">
                        {{ $post->excerpt }}
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center gap-2 rounded-xl border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-2 text-sm text-fuchsia-300 transition group-hover:bg-fuchsia-500/20 group-hover:text-white">
                            Читать далее
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    @if ($posts->hasPages())
        {{ $posts->onEachSide(1)->links('components.pagination') }}
    @endif
@endsection
