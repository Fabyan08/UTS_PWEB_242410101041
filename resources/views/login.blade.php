@extends('layouts.auth.app')

@section('title', 'Login')

@section('content')

    <main class="z-10 w-full max-w-md px-4 mt-8">
        <div class="glass-card rounded-2xl p-8 sm:p-10 relative overflow-hidden">
            <div class="w-full flex justify-center mb-4">
                <img src="{{ asset('img/hantu.png') }}" alt="Hantu" class="w-20 ">
            </div>
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-2">Login</h1>
            </div>
            <form method="POST" action="{{ route('login.store') }}" id="login-form" class="space-y-6">
                @csrf
                <div class="relative group">
                    <label
                        class="block text-sm font-medium text-gray-300 mb-1 transition-colors group-focus-within:text-primary">Username</label>
                    <input type="text" name="username" required id="username"
                        class="input-line w-full pb-2 text-base" placeholder="Tuliskan username mu">
                    @error('username')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative group">
                    <label
                        class="block text-sm font-medium text-gray-300 mb-1 transition-colors group-focus-within:text-primary">Password</label>
                    <input type="password" name="password" required id="password"
                        class="input-line w-full pb-2 text-base pr-10" placeholder="Tuliskan kata sandi mu">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                    <button type="submit" id="toggle-password"
                        class="absolute right-0 bottom-2 text-gray-400 hover:text-white transition">
                        <svg id="mata" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                <button type="submit"
                    class="w-full bg-[#2605bb] cursor-pointer text-white py-3 rounded-lg font-semibold transition-colors mt-4">
                    Yuk Buat Cerita!
                </button>
            </form>
        </div>
    </main>
@endsection
