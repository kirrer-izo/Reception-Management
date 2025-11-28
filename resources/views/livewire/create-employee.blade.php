<div>
    <div class="mb-3">
        <button wire:navigate href={{route('employees')}} class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition">
                <div class="flex leading-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-5 h-5">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    Back</div>
            </button>
      </div>
      <div class="flex justify-center">
        <form action="" wire:submit.prevent="save" class="w-full max-w-lg">
      
            @if (session('success'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mt-3 mb-3" role="alert">
                <p class="text-sm">{{session('success')}}</p>
            </div>
            @endif
            
            <div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-2xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-8 text-white text-center">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                    <ion-icon name="briefcase" class="text-3xl"></ion-icon>
                </div>
                <h2 class="text-3xl font-bold">Add Employee</h2>
                <p class="text-yellow-50 mt-2">Onboard a new team member.</p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form wire:submit.prevent="addEmployee" class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="person-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="name" type="text" id="name" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 transition-colors" placeholder="John Doe">
                        </div>
                        @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="mail-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="email" type="email" id="email" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 transition-colors" placeholder="john@company.com">
                        </div>
                        @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="call-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <input wire:model="phone_number" type="text" id="phone_number" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 transition-colors" placeholder="+1 234 567 890">
                        </div>
                        @error('phone_number') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Department -->
                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <ion-icon name="business-outline" class="text-gray-400"></ion-icon>
                            </div>
                            <select wire:model="department" id="department" class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 transition-colors">
                                <option value="">Select Department</option>
                                <option value="HR">HR</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Operations">Operations</option>
                            </select>
                        </div>
                        @error('department') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4">
                        <a href="{{ route('employees') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                            &larr; Back to List
                        </a>
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all transform hover:-translate-y-0.5">
                            <ion-icon name="person-add-outline" class="mr-2"></ion-icon> Add Employee
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
```
