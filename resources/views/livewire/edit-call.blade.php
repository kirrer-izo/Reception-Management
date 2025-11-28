<div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-2xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8 text-white text-center">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                    <ion-icon name="create" class="text-3xl"></ion-icon>
                </div>
                <h2 class="text-3xl font-bold">Edit Call Log</h2>
                <p class="text-blue-100 mt-2">Update the details of the call.</p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form wire:submit.prevent="updateCall" class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Caller Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="person-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="name" type="text" id="name" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="John Doe">
                        </div>
                        @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="call-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="phone_number" type="text" id="phone_number" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="+1 234 567 890">
                        </div>
                        @error('phone_number') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Call Type -->
                    <div>
                        <label for="call_type" class="block text-sm font-medium text-gray-700 mb-1">Call Type</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="options-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <select wire:model="call_type" id="call_type" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="">Select Type</option>
                                <option value="Inquiry">Inquiry</option>
                                <option value="Complaint">Complaint</option>
                                <option value="Support">Support</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        @error('call_type') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Call Status -->
                    <div>
                        <label for="call_status" class="block text-sm font-medium text-gray-700 mb-1">Call Status</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="flag-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <select wire:model="call_status" id="call_status" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="">Select Status</option>
                                <option value="Completed">Completed</option>
                                <option value="Missed">Missed</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        @error('call_status') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Employee (Optional) -->
                    <div>
                        <label for="employee" class="block text-sm font-medium text-gray-700 mb-1">Assigned Employee (Optional)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="briefcase-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="employee" type="text" id="employee" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Jane Smith">
                        </div>
                        @error('employee') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4">
                        <a href="{{ route('calls.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                            &larr; Back to Log
                        </a>
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all transform hover:-translate-y-0.5">
                            <ion-icon name="save-outline" class="mr-2"></ion-icon> Update Call
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
