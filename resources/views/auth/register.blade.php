<x-guest-layout>
    <div class="mb-8 text-center">
        <h1 class="text-2xl font-extrabold text-gray-900 dark:text-white tracking-tight">
            Create Account
        </h1>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
            Join our community and start managing your projects today.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <x-input-label for="full_name" :value="__('Full Name')" class="ml-1" />
                <x-text-input id="full_name" name="full_name" type="text"
                    class="block mt-1 w-full border-gray-200 dark:border-gray-700 rounded-xl shadow-sm focus:ring-indigo-500"
                    :value="old('full_name')" required autofocus placeholder="John Doe" />
                <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="role" :value="__('Account Type')" class="ml-1" />
                <select name="role" id="role"
                    class="block mt-1 w-full border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm transition duration-150">
                    <option value="user">Standard User</option>
                    <option value="admin">Administrator</option>
                </select>
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <x-input-label for="email" :value="__('Email Address')" class="ml-1" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-200 dark:border-gray-700 rounded-xl shadow-sm focus:ring-indigo-500"
                    type="email" name="email" :value="old('email')" required placeholder="john@example.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="password" :value="__('Password')" class="ml-1" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-200 dark:border-gray-700 rounded-xl shadow-sm focus:ring-indigo-500"
                        type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm')" class="ml-1" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-200 dark:border-gray-700 rounded-xl shadow-sm focus:ring-indigo-500"
                        type="password" name="password_confirmation" required placeholder="••••••••" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="pt-4 space-y-4">
            <x-primary-button class="w-full justify-center py-3 bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-900 rounded-xl text-base shadow-lg shadow-indigo-200 dark:shadow-none transition-all duration-150">
                {{ __('Create Free Account') }}
            </x-primary-button>

            <div class="flex items-center justify-center">
                <span class="text-sm text-gray-600 dark:text-gray-400">Already have an account?</span>
                <a class="ms-2 text-sm font-bold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 transition underline decoration-2 underline-offset-4" href="{{ route('login') }}">
                    {{ __('Log in') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
