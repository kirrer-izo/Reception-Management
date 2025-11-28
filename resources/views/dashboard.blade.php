<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-br from-purple-600 to-indigo-700 rounded-2xl shadow-xl p-8 text-white relative overflow-hidden">
                <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div>
                        <h1 class="text-4xl font-extrabold tracking-tight mb-2">Welcome Back! 👋</h1>
                        <p class="text-purple-100 text-lg">Ready to manage your reception today?</p>
                        
                        <!-- Quote -->
                        <div class="mt-6 p-4 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20 max-w-2xl">
                            <p class="italic text-lg font-medium">"{{ $quote }}"</p>
                            <span class="text-xs uppercase tracking-wider opacity-75 mt-2 block font-bold">Quote of the Day</span>
                        </div>
                    </div>
                    
                    <!-- Clock -->
                    <div class="text-right hidden md:block" x-data="{ time: new Date().toLocaleTimeString() }" x-init="setInterval(() => time = new Date().toLocaleTimeString(), 1000)">
                        <div class="text-5xl font-mono font-bold tracking-tighter" x-text="time"></div>
                        <div class="text-purple-200 font-medium mt-1">{{ date('l, F j, Y') }}</div>
                    </div>
                </div>
                
                <!-- Decor -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-5 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-60 h-60 rounded-full bg-indigo-400 opacity-10 blur-2xl"></div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                    $actions = [
                        ['route' => 'calls.create', 'icon' => 'call', 'color' => 'blue', 'label' => 'New Call'],
                        ['route' => 'createvisitor', 'icon' => 'people', 'color' => 'green', 'label' => 'New Visitor'],
                        ['route' => 'createemployee', 'icon' => 'briefcase', 'color' => 'yellow', 'label' => 'Add Employee'],
                        ['route' => 'createreview', 'icon' => 'star', 'color' => 'red', 'label' => 'Add Review'],
                    ];
                @endphp
                @foreach($actions as $action)
                <a href="{{ route($action['route']) }}" class="group relative overflow-hidden bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <ion-icon name="{{ $action['icon'] }}" class="text-6xl text-{{ $action['color'] }}-500"></ion-icon>
                    </div>
                    <div class="flex flex-col items-center justify-center h-full relative z-10">
                        <div class="w-14 h-14 rounded-full bg-{{ $action['color'] }}-50 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <ion-icon name="{{ $action['icon'] }}" class="text-3xl text-{{ $action['color'] }}-500"></ion-icon>
                        </div>
                        <span class="font-bold text-gray-800 group-hover:text-{{ $action['color'] }}-600 transition-colors">{{ $action['label'] }}</span>
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Calls Section -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                            <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                                <ion-icon name="call" class="text-blue-500"></ion-icon> Call Overview
                            </h2>
                            <a href="{{ route('calls.index') }}" class="text-sm font-medium text-purple-600 hover:text-purple-700 hover:underline">View All</a>
                        </div>
                        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Stats -->
                            <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
                                <div class="text-blue-600 text-sm font-semibold uppercase tracking-wide">Calls Today</div>
                                <div class="text-3xl font-bold text-blue-900 mt-1">{{ $callstoday->count() ?? 0 }}</div>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-5 border border-indigo-100">
                                <div class="text-indigo-600 text-sm font-semibold uppercase tracking-wide">Calls This Week</div>
                                <div class="text-3xl font-bold text-indigo-900 mt-1">{{ $callsweek->count() ?? 0 }}</div>
                            </div>

                            <!-- Latest Call -->
                            <div class="col-span-1 sm:col-span-2 mt-2">
                                <h3 class="text-sm font-semibold text-gray-500 mb-3 uppercase tracking-wider">Latest Activity</h3>
                                @if ($call)
                                <div class="bg-white border border-gray-200 rounded-xl p-4 hover:border-purple-300 transition-colors group cursor-pointer" onclick="window.location='{{ route('calls.show', $call->id) }}'">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <div class="font-bold text-gray-900 group-hover:text-purple-600 transition-colors">{{ $call->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $call->phone_number }}</div>
                                        </div>
                                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                            {{ $call->call_status }}
                                        </span>
                                    </div>
                                </div>
                                @else
                                <div class="text-center py-8 text-gray-400 bg-gray-50 rounded-xl border border-dashed border-gray-200">
                                    <ion-icon name="call-outline" class="text-4xl mb-2"></ion-icon>
                                    <p>No calls recorded yet.</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Section -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                            <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                                <ion-icon name="star" class="text-yellow-500"></ion-icon> User Reviews
                            </h2>
                            <span class="text-sm text-gray-500">{{ $reviews }} Total Reviews</span>
                        </div>
                        <div class="p-6">
                            <div class="space-y-3">
                                @foreach([5 => $per5star, 4 => $per4star, 3 => $per3star, 2 => $per2star, 1 => $per1star] as $star => $percent)
                                <div class="flex items-center gap-3">
                                    <div class="w-12 text-sm font-medium text-gray-600 flex items-center gap-1">
                                        {{ $star }} <ion-icon name="star" class="text-yellow-400 text-xs"></ion-icon>
                                    </div>
                                    <div class="flex-grow bg-gray-100 rounded-full h-2.5 overflow-hidden">
                                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: {{ $percent }}%"></div>
                                    </div>
                                    <div class="w-12 text-right text-sm text-gray-500">{{ round($percent) }}%</div>
                                </div>
                                @endforeach
                            </div>
                            <div class="mt-6 text-center">
                                <a href="{{ route('createreview') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors text-sm font-medium">
                                    <ion-icon name="create-outline"></ion-icon> Write a Review
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar (Visitors) -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden sticky top-24">
                        <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                            <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                                <ion-icon name="people" class="text-green-500"></ion-icon> Recent Visitors
                            </h2>
                        </div>
                        <div class="p-4 space-y-3">
                            @if ($visitors && count($visitors) > 0)
                                @foreach ($visitors as $visitor)
                                <div class="group p-4 rounded-xl border border-gray-100 hover:border-green-200 hover:bg-green-50/30 transition-all cursor-pointer" onclick="window.location='{{ route('viewvisitor', $visitor->id) }}'">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold">
                                            {{ substr($visitor->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="font-bold text-gray-900 group-hover:text-green-700">{{ $visitor->name }}</div>
                                            <div class="text-xs text-gray-500">{{ $visitor->phone_number }}</div>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-600 flex items-center gap-2 pl-13">
                                        <ion-icon name="person-outline" class="text-gray-400"></ion-icon>
                                        Visiting: <span class="font-medium">{{ $visitor->host_name }}</span>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="text-center py-10 text-gray-400">
                                    <ion-icon name="people-outline" class="text-5xl mb-2 opacity-50"></ion-icon>
                                    <p>No recent visitors.</p>
                                    <a href="{{ route('createvisitor') }}" class="text-green-600 font-medium text-sm mt-2 inline-block hover:underline">Register Visitor</a>
                                </div>
                            @endif
                        </div>
                        @if ($visitors && count($visitors) > 0)
                        <div class="p-4 border-t border-gray-100 bg-gray-50/50 text-center">
                            <a href="{{ route('visitors') }}" class="text-sm font-medium text-green-600 hover:text-green-700">View All Visitors &rarr;</a>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

