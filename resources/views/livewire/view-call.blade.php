<div class="flex justify-center space-x-3 mt-3">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <div class="flex justify-between mb-3">
        <div>
          <button wire:navigate href={{route('calls.index')}} class="bg-white text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-2 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
             <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
<div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-3xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8 text-white flex justify-between items-center">
                <div>
                    <h2 class="text-3xl font-bold">Call Details</h2>
                    <p class="text-blue-100 mt-1">View comprehensive information about this call.</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <ion-icon name="information-circle" class="text-2xl"></ion-icon>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Caller Info -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-100 pb-2">Caller Information</h3>
                        
                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Name</label>
                            <div class="mt-1 text-lg font-medium text-gray-900 flex items-center gap-2">
                                <ion-icon name="person" class="text-gray-400"></ion-icon> {{ $call->name }}
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</label>
                            <div class="mt-1 text-lg font-medium text-gray-900 flex items-center gap-2">
                                <ion-icon name="call" class="text-gray-400"></ion-icon> {{ $call->phone_number }}
                            </div>
                        </div>
                    </div>

                    <!-- Call Details -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-100 pb-2">Call Specifics</h3>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Type</label>
                            <div class="mt-1">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                    {{ $call->call_type }}
                                </span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Status</label>
                            <div class="mt-1">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $call->call_status == 'Completed' ? 'bg-green-100 text-green-800' : 
                                       ($call->call_status == 'Missed' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                    {{ $call->call_status }}
                                </span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</label>
                            <div class="mt-1 text-gray-900 flex items-center gap-2">
                                <ion-icon name="calendar" class="text-gray-400"></ion-icon>
                                {{ $call->created_at->format('F j, Y, g:i a') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notes / Additional Info -->
                @if($call->employee)
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Internal Details</h3>
                    <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                        <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Assigned Employee</label>
                        <div class="text-gray-900 font-medium flex items-center gap-2">
                            <ion-icon name="briefcase" class="text-gray-400"></ion-icon> {{ $call->employee }}
                        </div>
                    </div>
                </div>
                @endif

                <!-- Actions -->
                <div class="mt-8 pt-6 border-t border-gray-100 flex justify-between items-center">
                    <a href="{{ route('calls.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors flex items-center gap-1">
                        <ion-icon name="arrow-back"></ion-icon> Back to Log
                    </a>
                    <div class="flex gap-3">
                        <button wire:click="delete({{ $call->id }})" 
                                wire:confirm="Are you sure you want to delete this call log?"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors font-medium text-sm flex items-center gap-2">
                            <ion-icon name="trash"></ion-icon> Delete
                        </button>
                        <a href="{{ route('calls.edit', $call->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium text-sm flex items-center gap-2 shadow-sm">
                            <ion-icon name="create"></ion-icon> Edit Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
