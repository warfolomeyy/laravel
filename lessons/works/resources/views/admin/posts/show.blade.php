@extends('admin.layouts.app')

@section('title', 'Список постов Laravel 12')

@section('content')
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold leading-tight">{{ $post->title }}</h1>
            <div class="flex items-center gap-2 text-sm text-gray-400 mt-1">
                <span>{{ $post->is_published ? 'Опубликован' : 'Не опубликован' }}</span>
                <span>•</span>
                <time datetime="2025-10-31">{{ $post->published_at?->format('d.m.Y') }}</time>
            </div>
        </div>
    </div>

    <!-- Краткое описание -->
    <div class="glass rounded-2xl p-6 border border-white/10 mt-6">
        <h2 class="text-lg font-semibold mb-2">Описание</h2>
        <p class="text-gray-300 leading-relaxed">
            {{ $post->excerpt }}
        </p>
    </div>
@endsection
