<div class="flex justify-center items-center min-h-screen">

    <div class="max-w-[720px] mx-auto">
        <div class="mb-3">
            <button wire:navigate href={{route('review')}} class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
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

        <div class='flex items-center justify-center'>
           @can('update',$review)
           <div class="m-5">
               <button wire:navigate href="{{route('editreview',['review' => $review->id])}}" class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-600 transition-all duration-300 text-white">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                   </svg>
               </button>
           </div> 
           @endcan
         @can('delete',$review)
         <div class="m-5">
             <button wire:confirm="Are you sure you want do delete your review?" wire:click="delete({{$review->id}})" class="flex p-2.5 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M4 7h16"></path>
                     <path d="M10 11v6"></path>
                     <path d="M14 11v6"></path>
                     <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12"></path>
                     <path d="M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"></path>
                   </svg>
             </button>
         </div>
         @endcan
          
        </div>

        <div class="block mb-4 mx-auto border-b border-slate-300 pb-2 max-w-[360px]">
            @if (Auth::user()->usertype == 'admin')
            <a  
                href="{{route('users')}} 
                class="block w-full px-4 py-2 text-center text-slate-700 transition-all"
            >
                {{$review->reviewable->name}} <b>Review</b>.
            </a> 
            @else
            <a  
            class="block w-full px-4 py-2 text-center text-slate-700 transition-all hover:cursor-pointer"
        >
            {{$review->reviewable->name}} <b>Review</b>.
            </a> 
            @endif
        </div>

        <!-- Centering wrapper -->
        <div class="flex flex-col mt-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96 mb-3">
            <div class="p-4">
                <h5 class="mb-2 text-slate-800 text-xl font-semibold">
                    Review Text
                </h5>
                <p class="text-slate-600 leading-normal font-light mt-3">
                   {{$review->review}}
                </p>
                <p class="text-sm mt-3 flex items-baseline">{{$review->updated_at}}</p>
            </div>
        </div>

        @livewire('create-comment')
        @livewire('comment')
        

    </div>


    
</div>