<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">

                <div class="w-full lg:w-1/3">
                    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden sticky top-6">
                        <div class="h-24 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                        <div class="px-6 pb-6">
                            <div class="relative -mt-12 mb-4">
                                <div class="inline-flex items-center justify-center h-24 w-24 rounded-2xl bg-white dark:bg-gray-700 shadow-lg text-3xl font-bold text-indigo-600 border-4 border-white dark:border-gray-800">
                                    {{ strtoupper(substr($user->full_name, 0, 1)) }}
                                </div>
                            </div>

                            <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">
                                {{ $user->full_name }}
                            </h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider mb-4">
                                {{ $user->role }}
                            </p>

                            <div class="space-y-3 pt-4 border-t border-gray-100 dark:border-gray-700">
                                <div class="flex items-center text-gray-600 dark:text-gray-300">
                                    <svg class="h-5 w-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    <span class="text-sm truncate">{{ $user->email }}</span>
                                </div>
                            </div>

                            <button class="w-full mt-6 py-2 px-4 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-xl font-semibold hover:bg-indigo-600 hover:text-white transition-all duration-200">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 space-y-8">

                    <section>
                        <div class="flex items-center justify-between mb-4 px-2">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">Community Directory</h3>
                            <a href="#" class="text-sm text-indigo-600 font-semibold hover:underline">View all</a>
                        </div>
                        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="text-xs uppercase text-gray-400 font-bold border-b border-gray-100 dark:border-gray-700">
                                            <th class="px-6 py-4">Member</th>
                                            <th class="px-6 py-4">Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-50 dark:divide-gray-700">
                                        @foreach($users->take(4) as $u)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-900/50 transition">
                                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-gray-200">{{ $u->full_name }}</td>
                                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400 text-sm">{{ $u->email }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4 px-2">Latest Updates</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach(array_slice($posts, 0, 4) as $post)
                                <div class="group bg-white dark:bg-gray-800 p-5 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-md transition">
                                    <div class="flex items-center mb-3">
                                        <span class="px-2 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 text-[10px] font-bold rounded uppercase">API News</span>
                                    </div>
                                    <h4 class="font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 transition">
                                        {{ Str::limit($post['title'], 40) }}
                                    </h4>
                                    <p class="text-sm mt-2 text-gray-600 dark:text-gray-400 line-clamp-2">
                                        {{ $post['body'] }}
                                    </p>
                                    <div class="mt-4 pt-4 border-t border-gray-50 dark:border-gray-700 flex justify-between items-center">
                                        <span class="text-xs text-gray-400">5 min read</span>
                                        <button class="text-indigo-500 hover:text-indigo-700">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
