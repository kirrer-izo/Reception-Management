<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Reception Management') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            [x-cloak] { display: none !important; }
            ::-webkit-scrollbar { width: 8px; height: 8px; }
            ::-webkit-scrollbar-track { background: #f1f1f1; }
            ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
            ::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
        </style>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-900">
        <x-banner />

        <div class="min-h-screen flex flex-col relative">
            @livewire('navigation-menu')

            <!-- Sticky Header -->
            @if (isset($header))
                <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md border-b border-gray-200 shadow-sm transition-all duration-300">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            {{ $header }}
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 border border-purple-200">
                                Beta v0.2
                            </span>
                        </div>
                        <!-- User Dropdown / Navigation could go here if needed -->
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
            
            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 mt-auto py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-sm text-gray-500">
                        &copy; {{ date('Y') }} Reception Management. All rights reserved.
                    </div>
                    <div class="text-sm text-gray-500 flex items-center gap-1">
                        Made with <span class="text-red-500 animate-pulse">❤</span> by the Dev Team
                    </div>
                </div>
            </footer>

            <!-- Scroll to Top Button -->
            <div x-data="{ showButton: false }" 
                 @scroll.window="showButton = (window.pageYOffset > 300) ? true : false" 
                 class="fixed bottom-6 right-6 z-50"
                 x-cloak>
                <button @click="window.scrollTo({top: 0, behavior: 'smooth'})" 
                        x-show="showButton" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="p-3 bg-purple-600 hover:bg-purple-700 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </button>
            </div>
        </div>

        @stack('modals')
        @livewireScripts
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    </body>
</html>
