@extends('layouts.app')

@section('title', 'Забыли пароль на Laravel 12')

@section('content')
    <div class="mx-auto max-w-md">
        <h1 class="mb-6 text-2xl font-bold">Сброс пароля</h1>

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div>
                <label class="mb-1 block text-sm">Email</label>
                <input type="email" name="email" class="w-full rounded border px-3 py-2"
                       value="{{ old('email') }}" required autofocus>
                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <button class="w-full rounded bg-slate-900 py-2 text-white">
                Отправить ссылку
            </button>
        </form>
    </div>
@endsection
