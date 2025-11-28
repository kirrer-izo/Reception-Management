<div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-3xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-green-600 to-green-700 p-8 text-white flex justify-between items-center">
                <div>
                    <h2 class="text-3xl font-bold">Visitor Details</h2>
                    <p class="text-green-100 mt-1">Information about the visitor entry.</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <ion-icon name="id-card" class="text-2xl"></ion-icon>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visitor Info -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-100 pb-2">Visitor Information</h3>
                        
                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Name</label>
                            <div class="mt-1 text-lg font-medium text-gray-900 flex items-center gap-2">
                                <ion-icon name="person" class="text-gray-400"></ion-icon> {{ $visitor->name }}
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</label>
                            <div class="mt-1 text-gray-900 space-y-1">
                                <div class="flex items-center gap-2"><ion-icon name="call" class="text-gray-400"></ion-icon> {{ $visitor->phone_number }}</div>
                                <div class="flex items-center gap-2"><ion-icon name="mail" class="text-gray-400"></ion-icon> {{ $visitor->email }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Visit Details -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-100 pb-2">Visit Specifics</h3>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Host</label>
                            <div class="mt-1 text-lg font-medium text-gray-900 flex items-center gap-2">
                                <ion-icon name="person-circle" class="text-gray-400"></ion-icon> {{ $visitor->host_name }}
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Company</label>
                            <div class="mt-1 text-gray-900 flex items-center gap-2">
                                <ion-icon name="business" class="text-gray-400"></ion-icon> {{ $visitor->company ?? 'N/A' }}
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</label>
                            <div class="mt-1 text-gray-900 flex items-center gap-2">
                                <ion-icon name="calendar" class="text-gray-400"></ion-icon>
                                {{ $visitor->created_at->format('F j, Y, g:i a') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="mt-8 pt-6 border-t border-gray-100 flex justify-between items-center">
                    <a href="{{ route('visitors') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors flex items-center gap-1">
                        <ion-icon name="arrow-back"></ion-icon> Back to Log
                    </a>
                    <div class="flex gap-3">
                        <button wire:click="delete({{ $visitor->id }})" 
                                wire:confirm="Are you sure you want to delete this visitor?"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors font-medium text-sm flex items-center gap-2">
                            <ion-icon name="trash"></ion-icon> Delete
                        </button>
                        <a href="{{ route('editvisitor', $visitor->id) }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors font-medium text-sm flex items-center gap-2 shadow-sm">
                            <ion-icon name="create"></ion-icon> Edit Visitor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
