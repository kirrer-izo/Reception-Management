<div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-2xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-green-600 to-green-700 p-8 text-white text-center">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                    <ion-icon name="create" class="text-3xl"></ion-icon>
                </div>
                <h2 class="text-3xl font-bold">Edit Visitor</h2>
                <p class="text-green-100 mt-2">Update visitor details.</p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form wire:submit.prevent="updateVisitor" class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Visitor Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="person-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="name" type="text" id="name" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 transition-colors" placeholder="Jane Doe">
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
                            <input wire:model="phone_number" type="text" id="phone_number" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 transition-colors" placeholder="+1 234 567 890">
                        </div>
                        @error('phone_number') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="mail-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="email" type="email" id="email" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 transition-colors" placeholder="jane@example.com">
                        </div>
                        @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Company (Optional) -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="business-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="company" type="text" id="company" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 transition-colors" placeholder="Acme Corp">
                        </div>
                        @error('company') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Host Name -->
                    <div>
                        <label for="host_name" class="block text-sm font-medium text-gray-700 mb-1">Host Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="id-card-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="host_name" type="text" id="host_name" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 transition-colors" placeholder="Who are they visiting?">
                        </div>
                        @error('host_name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4">
                        <a href="{{ route('visitors') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                            &larr; Back to Log
                        </a>
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all transform hover:-translate-y-0.5">
                            <ion-icon name="save-outline" class="mr-2"></ion-icon> Update Visitor
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>