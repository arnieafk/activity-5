<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 dark:from-indigo-900 dark:to-purple-900 overflow-hidden shadow-sm sm:rounded-lg p-8 text-white">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-3xl font-bold mb-2 leading-tight">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-indigo-100 dark:text-indigo-300">We're thrilled to see you again. Here's a quick overview of your account today.</p>
                    </div>
                    <div>
                        <a href="{{ route('profile.edit') }}" class="px-5 py-2.5 bg-white text-indigo-600 dark:bg-gray-800 dark:text-indigo-400 rounded-lg font-semibold shadow hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-150 ease-in-out">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Account Status</div>
                        <div class="mt-4 flex items-center">
                            <span class="h-3 w-3 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                            <span class="text-lg font-bold text-green-600 dark:text-green-400">Active & Verified</span>
                        </div>
                    </div>
                    <div class="mt-8 text-sm text-gray-500 dark:text-gray-400 border-t border-gray-100 dark:border-gray-700 pt-4">
                        Your account has been fully authenticated.
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Quick Links</div>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline flex items-center text-sm font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Help Center
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline flex items-center text-sm font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.518-1.373 6.468-3.085 7.954C7.876 20.3 6.315 21 5 21c-1.315 0-2.876-.7-3.085-2.046C.127 17.468 0 14.518 0 11c0-2.768 1.126-5.269 2.94-7.06C4.755 2.15 7.182 1 10 1c2.818 0 5.245 1.15 7.06 2.94C18.874 5.731 20 8.232 20 11c0 3.518-1.273 6.468-2.985 7.954C15.876 20.3 14.315 21 13 21c-1.315 0-2.876-.7-3.085-2.046C10.373 17.468 10 14.518 10 11z"></path></svg>
                                    Security Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 text-xs text-gray-400 border-t border-gray-100 dark:border-gray-700 pt-4">
                        Need assistance? Reach out to support.
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Recent Login</div>
                        <div class="text-lg font-bold text-gray-800 dark:text-gray-200">{{ now()->format('M d, Y') }}</div>
                        <div class="text-xs text-gray-400 mt-1">Logged in successfully from your current device.</div>
                    </div>
                    <div class="mt-8 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between items-center text-xs text-gray-500 dark:text-gray-400">
                        <span>IP: 127.0.0.1</span>
                        <span class="text-green-600 dark:text-green-400 font-semibold">Secure</span>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-semibold mb-4">Activity Overview</h3>
                <div class="p-5 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-100 dark:border-gray-700 flex items-start space-x-4">
                    <div class="flex-shrink-0 bg-indigo-100 dark:bg-indigo-900 p-3 rounded-lg text-indigo-600 dark:text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800 dark:text-gray-200">Everything looks clear!</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Welcome to the dashboard. You have no pending notifications or tasks at the moment. Feel free to explore the features available in your profile or use the navigation bar above.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
