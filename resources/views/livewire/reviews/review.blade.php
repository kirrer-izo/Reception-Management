<!-- component -->
<div class="bg-white-950 flex justify-center items-center min-h-screen p-10">
    @if (session('success'))
    <div role="alert">
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
          <p>{{session('delete')}}</p>
        </div>
      </div>
    @endif
    <div class=" px-10 flex flex-col gap-2 p-5 bg-gray-800 text-white rounded-xl w-96">
        <h1 class="py-5 text-lg">Reviews</h1>
        <div class="flex">
            <input wire:model.live.debounce.300ms="search" class="rounded-md px-2 mt-3 text-cyan-950" type="text" name="" id="" placeholder="search ...">
        </div>

        <!-- Tags -->
        {{-- <div class="flex flex-wrap gap-2 w-full py-2">
            <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon></span>
            <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span>
            <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span>
            <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span>
            <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span>
        </div> --}}
        @if ($reviews)
        @foreach ($reviews as $review)
        <div class="flex flex-col gap-3 mt-14 w-96">
            <div wire:navigate href="{{route('viewreview',['review'=>$review->id])}}" class="flex flex-col gap-4 bg-gray-700 p-4 w-80 hover:shadow-xl hover:cursor-pointer rounded-xl">
                <!-- Profile and Rating -->
                <div class="flex justify justify-between">
                    <div class="flex gap-2">
                        <div class="w-7 h-7 text-center rounded-full bg-red-500">{{$reviewer->name[0]}}</div>
                        <span>{{$reviewer->name}}</span>
                    </div>
                    <div class="flex p-1 gap-1 text-orange-300">
                        @if($review->rating == 1)
                            <ion-icon name="star"></ion-icon>
                        @elseif ($review->rating == 2)
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        @elseif ($review->rating == 3)
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        @elseif ($review->rating == 4)
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        @elseif ($review->rating == 5)
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        
                        @endif
                        
                    </div>
                </div>

                <div class="w-40">
                   {{$review->review}}
                </div>

                <div class="flex justify-between">
                    <span>{{$review->updated_at}}</span>
                </div>
            </div>  
        @endforeach
        @else
        <div>
            <p>No Reviews!!</p>
        </div>
        @endif

            
        </div>
    </div>
</div>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>