<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="space-y-1">
                <h2 class="font-light text-2xl text-gray-900 dark:text-white tracking-tight uppercase">
                    {{ __('Registry Control') }}
                </h2>
                <p class="text-[10px] text-indigo-600 dark:text-indigo-400 font-bold uppercase tracking-[0.2em]">
                    Administrative Access Level
                </p>
            </div>

            <button class="inline-flex items-center px-5 py-2.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-xs font-bold uppercase tracking-widest hover:bg-indigo-600 dark:hover:bg-indigo-100 transition shadow-lg">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                {{ __('Add User') }}
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-2xl overflow-hidden border-t-4 border-gray-900 dark:border-white">

                <div class="p-8 border-b border-gray-100 dark:border-gray-700 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <h3 class="text-sm font-bold text-gray-900 dark:text-white uppercase tracking-widest">Database Records</h3>
                        <p class="text-xs text-gray-400 mt-1">Real-time user synchronization active.</p>
                    </div>

                    <div class="relative group">
                        <input type="text" placeholder="Filter by name or email..."
                            class="w-full md:w-80 pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border-none text-xs uppercase tracking-wider focus:ring-1 focus:ring-gray-400 dark:text-gray-200 transition-all">
                        <div class="absolute left-3 top-3 text-gray-400 group-focus-within:text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-100 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-900/40">
                            <tr>
                                <th class="px-8 py-5 text-left text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Identified User</th>
                                <th class="px-8 py-5 text-left text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Privilege Level</th>
                                <th class="px-8 py-5 text-left text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">System Status</th>
                                <th class="px-8 py-5 text-right text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Modifications</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-50 dark:divide-gray-700 bg-white dark:bg-gray-800">
                            @foreach($users as $user)
                                <tr class="hover:bg-indigo-50/30 dark:hover:bg-gray-700/30 transition-colors">
                                    <td class="px-8 py-6 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-12 w-12 flex-shrink-0 bg-gray-900 dark:bg-gray-700 flex items-center justify-center text-white dark:text-gray-300 text-xs font-mono tracking-tighter">
                                                ID:{{ $loop->iteration }}
                                            </div>
                                            <div class="ml-5">
                                                <div class="text-sm font-bold text-gray-900 dark:text-white uppercase tracking-tight">{{ $user->full_name }}</div>
                                                <div class="text-[11px] text-gray-500 dark:text-gray-400 font-mono">{{ $user->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 whitespace-nowrap">
                                        <span class="inline-flex items-center px-3 py-1 text-[10px] font-black uppercase tracking-widest {{ $user->role === 'admin' ? 'text-indigo-600 border border-indigo-600' : 'text-gray-500 border border-gray-300' }}">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6 whitespace-nowrap">
                                        <div class="flex items-center text-[11px] uppercase font-bold tracking-tighter text-green-600">
                                            <span class="h-1.5 w-1.5 rounded-full bg-green-500 mr-2 animate-pulse"></span>
                                            Operational
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 whitespace-nowrap text-right text-xs font-bold">
                                        <a href="#" class="text-gray-400 hover:text-indigo-600 mr-4 transition uppercase tracking-widest">Edit</a>
                                        <button class="text-gray-400 hover:text-red-600 transition uppercase tracking-widest">Purge</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="px-8 py-6 bg-gray-50 dark:bg-gray-900/50 flex justify-between items-center">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">Total Entries: {{ $users->count() }}</span>
                    <div class="flex space-x-2">
                        <button class="p-2 text-gray-400 hover:text-gray-900"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg></button>
                        <button class="p-2 text-gray-400 hover:text-gray-900"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
