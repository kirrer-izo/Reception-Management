<div>
    <div class="">
        <div class="mb-3">
          <button wire:navigate href={{route('home')}} class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
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
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rating">
                    Rating
                  </label>
                  <select wire:model="rating" name="" id="" class="appearance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3  px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <div class="flex flex-wrap gap-2 w-full py-2">
                      <option value="1">1<span><ion-icon name="star"></ion-icon></span></option>
                      <option value="2">2<span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span></option>
                      <option value="3">3<span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span></option>
                      <option value="4">4<span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span></option>
                      <option value="5">5<span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon></span></option>
                    </div>
                    </select>
 
                  {{-- <input wire:model="rating" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number"> --}}
                  @error('rating')
                  <span class="text-sm text-red-700">{{$message}}</span>
                  @enderror
              </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="review">
                    Review
                  </label>
                  <textarea wire:model="review" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="" id="" cols="30" rows="10"></textarea>
                  @error('review')
                  <span class="text-sm text-red-700">{{$message}}</span>
                  @enderror
              </div>
              </div>                
              </div>
                <div>
                  <button wire:loading.remove class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
                      Create
                    </button>
                </div>
        
            </form>
        </div>
      </div>
      
</div>

