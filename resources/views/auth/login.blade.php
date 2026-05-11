<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-10 text-center">
        <div class="mb-4">
            <span class="text-3xl font-light tracking-[0.3em] text-gray-900 dark:text-white uppercase">
                Portal
            </span>
        </div>
        <p class="text-xs font-semibold uppercase tracking-[0.15em] text-indigo-600 dark:text-indigo-400">
            System Authentication
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Account Email')" class="text-xs uppercase tracking-widest text-gray-500" />
            <x-text-input id="email"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:border-indigo-500 focus:ring-indigo-500 rounded-none shadow-sm transition-all"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                placeholder="identity@organization.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Security Key')" class="text-xs uppercase tracking-widest text-gray-500" />
            <x-text-input id="password"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:border-indigo-500 focus:ring-indigo-500 rounded-none shadow-sm transition-all"
                type="password"
                name="password"
                required autocomplete="current-password"
                placeholder="••••••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-gray-300 dark:border-gray-700 text-indigo-600 focus:ring-indigo-500 transition cursor-pointer" name="remember">
                <span class="ms-2 text-xs uppercase tracking-tighter text-gray-600 dark:text-gray-400 select-none">{{ __('Remember Session') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-xs font-bold uppercase tracking-tighter text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 transition-colors" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full flex justify-center items-center px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-xs font-bold uppercase tracking-[0.2em] hover:bg-indigo-700 dark:hover:bg-indigo-100 transition-all duration-200 shadow-lg">
                {{ __('Secure Login') }}
            </button>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('register') }}" class="text-[10px] uppercase tracking-widest text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition">
                Register New Account
            </a>
        </div>
    </form>
</x-guest-layout>
