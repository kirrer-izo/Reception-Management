<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <button wire:navigate href="{{ route('visitors') }}" class="flex items-center text-gray-600 hover:text-gray-900 transition-colors">
                <ion-icon name="arrow-back" class="mr-2"></ion-icon> Back to Visitors
            </button>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h2 class="text-xl font-bold text-gray-800">Register New Visitor</h2>
                <p class="text-sm text-gray-500">Enter the details of the visitor.</p>
            </div>
            
            <div class="p-8">
                @if (session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r shadow-sm flex items-center gap-2" role="alert">
                    <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                    <p class="text-green-700 font-medium">{{ session('success') }}</p>
                </div>
                @endif

                <form wire:submit.prevent="save" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="name">Visitor Name</label>
                        <input wire:model="name" type="text" placeholder="e.g. Jane Doe" class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm transition-colors">
                        @error('name') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="phone_number">Phone Number</label>
                            <input wire:model="phone_number" type="text" placeholder="e.g. +1 234 567 8900" class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm transition-colors">
                            @error('phone_number') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Email Address</label>
                            <input wire:model="email" type="email" placeholder="e.g. jane@example.com" class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm transition-colors">
                            @error('email') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" for="host_name">Host</label>
                        <select wire:model="host_name" class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm transition-colors">
                            <option value="">Select Host</option>
                            @foreach($employees as $emp)
                                <option value="{{ $emp->name }}">{{ $emp->name }}</option>
                            @endforeach
                        </select>
                        @error('host_name') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="check_in_time">Check In Time</label>
                            <input wire:model="check_in_time" type="time" class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm transition-colors">
                            @error('check_in_time') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="check_out_time">Check Out Time (Optional)</label>
                            <input wire:model="check_out_time" type="time" class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-sm transition-colors">
                            @error('check_out_time') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-end gap-3">
                        <a href="{{ route('visitors') }}" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 font-medium transition-colors">Cancel</a>
                        <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 font-medium shadow-sm hover:shadow-md transition-all flex items-center gap-2">
                            <span wire:loading.remove>Register Visitor</span>
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
