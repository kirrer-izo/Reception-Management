<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        @if (session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r shadow-sm flex items-center justify-between" role="alert">
            <div class="flex items-center gap-2">
                <ion-icon name="checkmark-circle" class="text-green-500 text-xl"></ion-icon>
                <p class="text-green-700 font-medium">{{ session('success') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="text-green-500 hover:text-green-700">
                <ion-icon name="close"></ion-icon>
            </button>
        </div>
        @endif

        @if (session('delete'))
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r shadow-sm flex items-center justify-between" role="alert">
            <div class="flex items-center gap-2">
                <ion-icon name="trash" class="text-red-500 text-xl"></ion-icon>
                <p class="text-red-700 font-medium">{{ session('delete') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700">
                <ion-icon name="close"></ion-icon>
            </button>
        </div>
        @endif

        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Customer Reviews</h2>
                <p class="text-gray-500 mt-1">See what people are saying about their experience.</p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto items-center">
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <ion-icon name="search-outline" class="text-gray-400"></ion-icon>
                    </div>
                    <input wire:model.live.debounce.300ms="search" type="text" class="pl-10 block w-full rounded-lg border-gray-300 bg-white text-sm focus:border-yellow-500 focus:ring-yellow-500 shadow-sm" placeholder="Search reviews...">
                </div>
                
                <a href="{{ route('createreview') }}" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors font-medium shadow-sm hover:shadow-md whitespace-nowrap">
                    <ion-icon name="create-outline" class="text-xl"></ion-icon> Write a Review
                </a>
            </div>
        </div>

        @if ($reviews && count($reviews) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($reviews as $review)
            <div wire:navigate href="{{route('viewreview',['review'=>$review->id])}}" class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all cursor-pointer group h-full flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center text-white font-bold shadow-sm">
                            {{ substr($reviewer, 0, 1) }}
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 group-hover:text-purple-600 transition-colors">{{ $reviewer }}</div>
                            <div class="text-xs text-gray-500">{{ $review->updated_at->diffForHumans() }}</div>
                        </div>
                    </div>
                    <div class="flex gap-0.5 text-yellow-400 text-sm">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $review->rating)
                                <ion-icon name="star"></ion-icon>
                            @else
                                <ion-icon name="star-outline" class="text-gray-300"></ion-icon>
                            @endif
                        @endfor
                    </div>
                </div>
                
                <div class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow">
                    "{{ Str::limit($review->review, 150) }}"
                </div>
                
                <div class="pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400">
                    <span>Verified Review</span>
                    <span class="group-hover:translate-x-1 transition-transform text-purple-600 font-medium flex items-center gap-1">
                        Read More <ion-icon name="arrow-forward"></ion-icon>
                    </span>
                </div>
            </div>  
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
            {{-- $reviews->links() --}} 
        </div>
        
        @else
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-12 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-50 text-yellow-500 mb-4">
                <ion-icon name="star-outline" class="text-3xl"></ion-icon>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">No Reviews Yet</h3>
            <p class="text-gray-500 mb-6 max-w-md mx-auto">Be the first to share your experience with us. Your feedback helps us improve.</p>
            <a href="{{ route('createreview') }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors font-medium shadow-sm hover:shadow-md">
                <ion-icon name="create-outline"></ion-icon> Write First Review
            </a>
        </div>
        @endif
    </div>
</div>