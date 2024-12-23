<div class="">
  <div class="mb-3">
    <button wire:navigate href={{route('calllog')}} class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
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
  <div class="flex justify-center mb-10">
    <form action="" wire:submit.prevent="save" class="w-full max-w-lg">
        @if (session('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mt-3 mb-3" role="alert">
                <p class="text-sm">{{session('success')}}</p>
          </div>
        @endif
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
              Date
            </label>
            <input wire:model="date" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date">
            @error('date')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
              Time
            </label>
            <input wire:model="time" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="time" >
            @error('time')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
              Name
            </label>
            <input wire:model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Enter Name">
            @error('name')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone_number">
              Phone Number
            </label>
            <input wire:model="phone_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text">
            @error('phone_number')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
          
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
              Call Duration
            </label>
            <input wire:model="call_duration" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="in mins">
            @error('call_duration')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="call_type">
                Call Type
              </label>
              <div class="">
                <select wire:model="call_type" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="">
                  <option>Select...</option>
                  <option value="inbound">inbound</option>
                  <option value="outbound">outbound</option>
                </select>
                @error('call_type')
                <span class="text-sm text-red-700">{{$message}}</span>
                @enderror
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="call_status">
                Call Status
              </label>
              <div class="">
                <select wire:model="call_status" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="">
                  <option>Select...</option>
                  <option value="completed">completed</option>
                  <option value="missed">missed</option>
                  <option value="voicemail">voicemail</option>
                </select>
                @error('call_status')
                <span class="text-sm text-red-700">{{$message}}</span>
                @enderror
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="employee">
                Employee
              </label>
              <input wire:model="employee" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Your Name...">
              @error('employee')
              <span class="text-sm text-red-700">{{$message}}</span>
              @enderror
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="notes">
                Notes
              </label>
              <textarea wire:model="notes" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="" id="" cols="30" rows="10"></textarea>
            </div>
            @error('notes')
                <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
          </div>
          <div wire:loading.remove>
            <button type="submit"
            class="relative px-4 py-2 text-sm text-white font-semibold
                   bg-green-400 overflow-hidden transition-all duration-300 ease-in-out
                   hover:bg-green-600 rounded-full z-10
                   before:absolute before:inset-0 before:bg-green-600 before:origin-left
                   before:scale-x-0 before:transition-transform before:duration-300
                   before:ease-in-out hover:before:scale-x-100 before:z-0"
        >
            <span class="relative z-10">Create</span>
        </button>
          </div>
          <div wire:loading>
            <button
            class="relative px-4 py-2 text-sm text-white font-semibold
                   bg-green-400 overflow-hidden transition-all duration-300 ease-in-out
                   hover:bg-green-600 rounded-full z-10
                   before:absolute before:inset-0 before:bg-green-600 before:origin-left
                   before:scale-x-0 before:transition-transform before:duration-300
                   before:ease-in-out hover:before:scale-x-100 before:z-0 flex items-center justify-center gap-2"
           >
        <svg class="hidden w-4 h-4 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        
    </button>
          
          </div>

      </form>
  </div>
</div>
