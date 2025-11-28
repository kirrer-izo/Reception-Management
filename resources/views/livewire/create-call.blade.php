<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <button wire:navigate href="{{ route('calls.index') }}" class="flex items-center text-gray-600 hover:text-gray-900 transition-colors">
                <ion-icon name="arrow-back" class="mr-2"></ion-icon> Back to Calls
            </button>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h2 class="text-xl font-bold text-gray-800">Log New Call</h2>
                <p class="text-sm text-gray-500">Enter the details of the incoming call.</p>
            </div>
            
            <div class="p-8">
                @if (session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r shadow-sm flex items-center gap-2" role="alert">
                    <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                    <p class="text-green-700 font-medium">{{ session('success') }}</p>
                </div>
                @endif

                <form wire:submit.prevent="save" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="date">Date</label>
                            <input wire:model="date" type="date" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors">
                            @error('date') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="time">Time</label>
                            <input wire:model="time" type="time" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors">
                            @error('time') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Caller Name</label>
                        <input wire:model="name" type="text" placeholder="e.g. John Doe" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors">
                        @error('name') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="phone_number">Phone Number</label>
                        <input wire:model="phone_number" type="text" placeholder="e.g. +1 234 567 8900" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors">
                        @error('phone_number') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="employee">Employee</label>
                        <select wire:model="employee" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors">
                            <option value="">Select Employee</option>
                            @foreach($employees as $emp)
                                <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                            @endforeach
                        </select>
                        @error('employee') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="call_status">Status</label>
                        <select wire:model="call_status" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors">
                            <option value="">Select Status</option>
                            <option value="completed">Completed</option>
                            <option value="missed">Missed</option>
                            <option value="pending">Pending</option>
                        </select>
                        @error('call_status') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="notes">Notes</label>
                        <textarea wire:model="notes" rows="4" placeholder="Add any additional details..." class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 shadow-sm transition-colors"></textarea>
                        @error('notes') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-4 flex items-center justify-end gap-3">
                        <a href="{{ route('calls.index') }}" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 font-medium transition-colors">Cancel</a>
                        <button type="submit" class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 font-medium shadow-sm hover:shadow-md transition-all flex items-center gap-2">
                            <span wire:loading.remove>Save Call Log</span>
                            <span wire:loading class="flex items-center gap-2">
                                <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Saving...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
