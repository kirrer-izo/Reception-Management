<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        @if (session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r shadow-sm flex items-center justify-between" role="alert">
            <div class="flex items-center gap-2">
                <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                <p class="text-green-700 font-medium">{{ session('success') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="text-green-500 hover:text-green-700">
                <ion-icon name="close"></ion-icon>
            </button>
        </div>
        @endif

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Header with Search and Actions -->
            <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex-1 w-full md:w-auto">
                    <h2 class="text-2xl font-bold text-gray-800">Call Log</h2>
                    <p class="text-sm text-gray-500">Manage and track all incoming calls.</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto items-center">
                    <div class="relative w-full sm:w-64">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <ion-icon name="search-outline" class="text-gray-400"></ion-icon>
                        </div>
                        <input wire:model.live.debounce.300ms="search" type="text" class="pl-10 block w-full rounded-lg border-gray-300 bg-white text-sm focus:border-purple-500 focus:ring-purple-500 shadow-sm" placeholder="Search calls...">
                    </div>
                    
                    <a href="{{ route('calls.create') }}" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors font-medium shadow-sm hover:shadow-md whitespace-nowrap">
                        <ion-icon name="add-circle-outline" class="text-xl"></ion-icon> New Call
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                            <th class="p-4 pl-6">Caller Name</th>
                            <th class="p-4">Phone Number</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Date</th>
                            <th class="p-4 pr-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($calls as $call)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="p-4 pl-6">
                                <div class="font-medium text-gray-900">{{ $call->name }}</div>
                            </td>
                            <td class="p-4 text-gray-600">{{ $call->phone_number }}</td>
                            <td class="p-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    {{ $call->call_status == 'completed' ? 'bg-green-100 text-green-800' : 
                                       ($call->call_status == 'missed' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                    {{ ucfirst($call->call_status) }}
                                </span>
                            </td>
                            <td class="p-4 text-gray-500 text-sm">{{ $call->created_at->format('M d, Y h:i A') }}</td>
                            <td class="p-4 pr-6 text-right">
                                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('calls.show', $call->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="View">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </a>
                                    <a href="{{ route('calls.edit', $call->id) }}" class="p-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" title="Edit">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </a>
                                    <button wire:click="delete({{ $call->id }})" 
                                            wire:confirm="Are you sure you want to delete this call log?"
                                            class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-12 text-center text-gray-400">
                                <div class="flex flex-col items-center justify-center">
                                    <ion-icon name="call-outline" class="text-4xl mb-2 opacity-50"></ion-icon>
                                    <p class="text-lg font-medium text-gray-500">No calls found</p>
                                    <p class="text-sm">Try adjusting your search or create a new call.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-100 bg-gray-50/50">
                {{ $calls->links() }}
            </div>
        </div>
    </div>
</div>
