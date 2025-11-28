<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reception Management - Elevate Your Front Desk</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=outfit:400,500,600,700|inter:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-900 selection:bg-brand-500 selection:text-white">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 bg-brand-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">R</div>
                    <span class="font-display font-bold text-xl tracking-tight text-gray-900">Reception<span class="text-brand-600">Mgt</span></span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="font-medium text-gray-600 hover:text-brand-600 transition-colors">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-medium text-gray-600 hover:text-brand-600 transition-colors">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">Get Started</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[1000px] bg-brand-100 rounded-full blur-3xl opacity-50 mix-blend-multiply filter"></div>
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-purple-100 rounded-full blur-3xl opacity-50 mix-blend-multiply filter"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-gray-200 shadow-sm mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="text-sm font-medium text-gray-600">v2.0 is now live</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-gray-900 tracking-tight mb-8 leading-tight">
                Streamline Your <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-purple-600">Front Desk Operations</span>
            </h1>
            
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600 leading-relaxed">
                The all-in-one solution for managing visitors, calls, and employee schedules. 
                Create a seamless experience for your guests and staff.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-brand-600 text-white font-semibold text-lg hover:bg-brand-700 transition-all shadow-lg hover:shadow-brand-500/30 transform hover:-translate-y-1">
                    Get Started
                </a>
                <a href="#features" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white text-gray-700 border border-gray-200 font-semibold text-lg hover:bg-gray-50 transition-all hover:border-gray-300">
                    Learn More
                </a>
            </div>

            <!-- Dashboard Preview -->
            <div class="mt-20 relative mx-auto max-w-5xl">
                <div class="rounded-2xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-3xl lg:p-4">
                    <div class="rounded-xl bg-white shadow-2xl ring-1 ring-gray-900/10 overflow-hidden">
                        <!-- Placeholder for dashboard screenshot, using a gradient for now -->
                        <div class="aspect-[16/9] bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center text-gray-400">
                            <div class="text-center">
                                <svg class="w-20 h-20 mx-auto mb-4 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                <span class="text-lg font-medium">Dashboard Preview</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-display font-bold text-gray-900 sm:text-4xl">Everything you need</h2>
                <p class="mt-4 text-lg text-gray-600">Powerful features to manage your reception efficiently.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visitor Management</h3>
                    <p class="text-gray-600">Track check-ins, print badges, and notify hosts instantly when guests arrive.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Call Logging</h3>
                    <p class="text-gray-600">Keep detailed records of all incoming and outgoing calls with easy filtering.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
                    <div class="w-12 h-12 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Employee Scheduling</h3>
                    <p class="text-gray-600">Manage shifts, track attendance, and handle leave requests seamlessly.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0">
                    <span class="font-display font-bold text-2xl tracking-tight">Reception<span class="text-brand-500">Mgt</span></span>
                    <p class="mt-2 text-gray-400 text-sm">© {{ date('Y') }} Reception Management. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>