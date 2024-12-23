<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            ::-webkit-scrollbar {
                width: .5rem;
                height: .5rem;
        }
            ::-webkit-scrollbar-thumb {
                background: rgba(0,0,0,.15);
        }
            ::-webkit-scrollbar-thumb:hover {
                background: rgba(0,0,0,.3);
        }
        </style>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="flex" id="wrapper" x-data="{ isOpen: true }">
            <div class="fixed top-0 left-0 overflow-y-auto h-screen flex flex-col bg-gray-700 text-white shadow-lg transition-all duration-300" :class="isOpen ? 'w-24' : 'w-0'" id="sidenav">
                <div class="flex items-center justify-center mb-3">
                    <svg class="h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="7" width="18" height="14" rx="2" ry="2"/>
                        <path d="M8 7V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v3"/>
                        <path d="M14.5 11.5 12 14l-2.5-2.5"/>
                        <circle cx="6" cy="14" r="1"/>
                        <circle cx="18" cy="14" r="1"/>
                    </svg>
                </div>
                <div :class="isOpen ? 'block' : 'hidden'">
                    @livewire('navigation-menu')
                </div>
            </div>

            <div class="flex flex-col w-full">
                <div class="fixed w-full h-20 flex flex-col justify-start bg-gray-700">
                    <button class="my-auto" @click.prevent="isOpen = !isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <circle cx="12" cy="6" r="2"/>
                            <circle cx="12" cy="12" r="2"/>
                            <circle cx="12" cy="18" r="2"/>
                        </svg>
                    </button>

                </div>
                <div class=" flex justify-center mt-32">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    </body>
</html>
