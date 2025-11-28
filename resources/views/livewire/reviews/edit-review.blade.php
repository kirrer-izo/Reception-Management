<div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-2xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-red-500 to-red-600 p-8 text-white text-center">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                    <ion-icon name="create" class="text-3xl"></ion-icon>
                </div>
                <h2 class="text-3xl font-bold">Edit Review</h2>
                <p class="text-red-100 mt-2">Update your feedback.</p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form wire:submit.prevent="edit" class="space-y-6">
                    <!-- Rating -->
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                        <div class="flex items-center gap-2 mb-2">
                            <div class="flex text-yellow-400 text-2xl">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <span class="text-xs text-gray-500">(Current Rating)</span>
                        </div>
                        <input wire:model="newrating" type="number" min="1" max="5" id="rating" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 transition-colors" placeholder="Enter new rating (1-5)">
                        @error('newrating') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Review -->
                    <div>
                        <label for="review" class="block text-sm font-medium text-gray-700 mb-1">Review</label>
                        <div class="relative">
                            <textarea wire:model="newreview" id="review" rows="4" class="block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 transition-colors" placeholder="Share your experience..."></textarea>
                            <div class="absolute top-3 right-3 text-gray-400 pointer-events-none">
                                <ion-icon name="pencil"></ion-icon>
                            </div>
                        </div>
                        @error('newreview') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4">
                        <a href="{{ route('review') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                            &larr; Back to Reviews
                        </a>
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all transform hover:-translate-y-0.5">
                            <ion-icon name="save-outline" class="mr-2"></ion-icon> Update Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
