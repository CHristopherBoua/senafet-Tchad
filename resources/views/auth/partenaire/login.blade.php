@extends('layouts.app')

@section('content')
<div class="min-h-[60vh] flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
            <h1 class="text-2xl font-bold text-[#000] text-center mb-2">{{ __('partenaire.login_title') }}</h1>
            <p class="text-sm text-[#333] text-center mb-6">{{ __('partenaire.login_intro') }}</p>

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 text-red-800 rounded-lg text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('partenaire.login.store') }}" method="post" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-[#333] mb-1">{{ __('admin.email') }}</label>
                    <input type="email" name="email" id="email" required autofocus
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-[#333] mb-1">{{ __('admin.password') }}</label>
                    <input type="password" name="password" id="password" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                           class="rounded border-gray-300 text-[#C41E3A] focus:ring-[#C41E3A]">
                    <label for="remember" class="ml-2 text-sm text-[#333]">{{ __('admin.remember') }}</label>
                </div>
                <button type="submit" class="w-full px-6 py-3 bg-[#C41E3A] text-white font-semibold rounded-lg hover:bg-[#a0192f] transition">
                    {{ __('admin.login') }}
                </button>
            </form>
            <p class="mt-6 text-center">
                <a href="{{ route('login') }}" class="text-sm text-[#C41E3A] hover:underline">{{ __('partenaire.admin_link') }}</a>
            </p>
        </div>
    </div>
</div>
@endsection
