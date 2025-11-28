<div>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <!-- Header -->
            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-display font-bold text-gray-900">Write a Review</h2>
                    <p class="mt-2 text-sm text-gray-600">Share your experience with us</p>
                </div>
                <button wire:navigate href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-colors">
                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Back to Dashboard
                </button>
            </div>

            <!-- Form Card -->
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="p-8">
                    @if (session('success'))
                        <div class="mb-6 rounded-lg bg-green-50 p-4 border border-green-200">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form wire:submit.prevent="save" class="space-y-8">
                        <!-- Rating Section -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-4">Rating</label>
                            <div class="flex items-center gap-4">
                                <div class="flex flex-wrap gap-3">
                                    @foreach([1, 2, 3, 4, 5] as $star)
                                        <label class="cursor-pointer group relative">
                                            <input type="radio" wire:model="rating" value="{{ $star }}" class="peer sr-only">
                                            <div class="w-12 h-12 rounded-xl border-2 border-gray-200 flex items-center justify-center text-xl font-bold text-gray-400 peer-checked:border-brand-500 peer-checked:text-brand-600 peer-checked:bg-brand-50 hover:border-brand-200 hover:bg-gray-50 transition-all duration-200">
                                                {{ $star }}
                                                <svg class="w-4 h-4 ml-1 text-gray-300 peer-checked:text-brand-500" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            </div>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            @error('rating') <span class="text-sm text-red-600 mt-2 block">{{ $message }}</span> @enderror
                        </div>

                        <!-- Review Text Section -->
                        <div>
                            <label for="review" class="block text-sm font-medium text-gray-700 mb-2">Your Review</label>
                            <div class="mt-1">
                                <textarea wire:model="review" id="review" rows="6" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-xl resize-none" placeholder="Tell us about your experience..."></textarea>
                            </div>
                            @error('review') <span class="text-sm text-red-600 mt-2 block">{{ $message }}</span> @enderror
                            <p class="mt-2 text-sm text-gray-500">Your feedback helps us improve our service.</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4 border-t border-gray-100">
                            <button type="submit" wire:loading.attr="disabled" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 disabled:opacity-50 disabled:cursor-not-allowed transition-all hover:shadow-lg transform hover:-translate-y-0.5">
                                <span wire:loading.remove>Submit Review</span>
                                <span wire:loading class="flex items-center">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Submitting...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
