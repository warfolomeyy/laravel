@extends('layouts.app')

@section('title', 'Восстановление пароля на Laravel 12')

@section('content')
    <div class="mx-auto max-w-md">
        <h1 class="mb-6 text-2xl font-bold">Новый пароль</h1>

        <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="mb-1 block text-sm">Email</label>
                <input type="email" name="email" class="w-full rounded border px-3 py-2"
                       value="{{ old('email') }}" required>
            </div>

            <div>
                <label class="mb-1 block text-sm">Новый пароль</label>
                <input type="password" name="password" class="w-full rounded border px-3 py-2" required>
            </div>

            <div>
                <label class="mb-1 block text-sm">Подтверждение</label>
                <input type="password" name="password_confirmation"
                       class="w-full rounded border px-3 py-2" required>
            </div>

            <button class="w-full rounded bg-slate-900 py-2 text-white">
                Сохранить пароль
            </button>
        </form>
    </div>
@endsection
