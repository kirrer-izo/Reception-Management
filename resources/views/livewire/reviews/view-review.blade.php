<div class="py-12 flex justify-center items-center min-h-[80vh]">
    <div class="max-w-3xl w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-red-500 to-red-600 p-8 text-white flex justify-between items-center">
                <div>
                    <h2 class="text-3xl font-bold">Review Details</h2>
                    <p class="text-red-100 mt-1">Feedback from {{ $review->reviewable->name }}</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <ion-icon name="star" class="text-2xl"></ion-icon>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8">
                <!-- Review Text -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-100 pb-2 mb-4">Review Content</h3>
                    <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 relative">
                        <ion-icon name="quote" class="absolute top-4 left-4 text-gray-200 text-4xl -z-0"></ion-icon>
                        <p class="text-gray-700 italic relative z-10 text-lg leading-relaxed">"{{ $review->review }}"</p>
                    </div>
                </div>

                <!-- Rating & Meta -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Rating</label>
                        <div class="flex items-center gap-1 text-yellow-400 text-2xl">
                            @for ($i = 1; $i <= 5; $i++)
                                <ion-icon name="{{ $i <= $review->rating ? 'star' : 'star-outline' }}"></ion-icon>
                            @endfor
                            <span class="text-gray-400 text-sm ml-2 font-medium">({{ $review->rating }}/5)</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Date</label>
                        <div class="flex items-center gap-2 text-gray-700">
                            <ion-icon name="calendar-outline" class="text-gray-400"></ion-icon>
                            {{ $review->created_at->format('F j, Y, g:i a') }}
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="border-t border-gray-100 pt-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Comments</h3>
                    @livewire('create-comment', ['review' => $review])
                    <div class="mt-6 space-y-4">
                        @livewire('comment', ['review' => $review])
                    </div>
                </div>

                <!-- Actions -->
                <div class="mt-8 pt-6 border-t border-gray-100 flex justify-between items-center">
                    <a href="{{ route('review') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors flex items-center gap-1">
                        <ion-icon name="arrow-back"></ion-icon> Back to Reviews
                    </a>
                    <div class="flex gap-3">
                        @can('delete', $review)
                        <button wire:click="delete({{ $review->id }})" 
                                wire:confirm="Are you sure you want to delete this review?"
                                class="px-4 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors font-medium text-sm flex items-center gap-2">
                            <ion-icon name="trash"></ion-icon> Delete
                        </button>
                        @endcan
                        @can('update', $review)
                        <a href="{{ route('editreview', $review->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium text-sm flex items-center gap-2 shadow-sm">
                            <ion-icon name="create"></ion-icon> Edit Review
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>