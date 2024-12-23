<div class="r">
  <div class="mb-3">
    <button wire:navigate href={{route('visitors')}} class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
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
    <form action="" wire:submit.prevent="edit" class="w-full max-w-lg">
      @if (session('success'))
      <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mt-3 mb-3" role="alert">
              <p class="text-sm">{{session('success')}}</p>
        </div>
      @endif
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newdate">
            Date
          </label>
          <input wire:model="newdate" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date">
          @error('newdate')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newname">
            Name
          </label>
          <input wire:model="newname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Customer Name...">
          @error('newname')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newphone_number">
            Phone Number
          </label>
          <input wire:model="newphone_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text">
          @error('newphone_number')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
            Email
          </label>
          <input wire:model="newemail" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="email" placeholder="">
          @error('newemail')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newcompany">
            Institution From
          </label>
          <input wire:model="newcompany" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Customer Name...">
          @error('newcompany')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newhost_name">
            Host Name
          </label>
          <input wire:model="newhost_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Customer Name...">
          @error('newhost_name')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
            Check In Time
          </label>
          <input wire:model="newcheck_in_time" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="time" placeholder="">
          @error('newcheck_in_time')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newcheck_out_time">
            Check Out Time
          </label>
          <input wire:model="newcheck_out_time" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="time">
          @error('newcheck_out_time')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
        

      </div>
        <div wire:loading.remove>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
              Update
            </button>
        </div>

    </form>
  </div>
    
  </div>
  