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
          <input wire:model="newdate" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="" type="newdate">
          @error('newdate')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newtime">
            Time
          </label>
          <input wire:model="newtime" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="newtime" >
          @error('newtime')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newname">
            Name
          </label>
          <input wire:model="newname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Enter Name">
          @error('newname')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newphone_number">
            Phone Number
          </label>
          <input wire:model="newphone_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text">
          @error('newphone_number')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
        
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
            Call Duration
          </label>
          <input wire:model="newcall_duration" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="in mins">
          @error('newcall_duration')
          <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
      </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newcall_type">
              Call Type
            </label>
            <div class="relative">
              <select wire:model="newcall_type" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="">
                <option>Select...</option>
                <option value="inbound">inbound</option>
                <option value="outbound">outbound</option>
              </select>
              @error('newcall_type')
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
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newcall_status">
              Call Status
            </label>
            <div class="relative">
              <select wire:model="newcall_status" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="">
                <option>Select...</option>
                <option value="completed">completed</option>
                <option value="missed">missed</option>
                <option value="voicemail">voicemail</option>
              </select>
              @error('newcall_status')
              <span class="text-sm text-red-700">{{$message}}</span>
              @enderror
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newemployee">
              Employee
            </label>
            <input wire:model="newemployee" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Your Name...">
            @error('newemployee')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="newnotes">
              Notes
            </label>
            <textarea wire:model="newnotes" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="" id="" cols="30" rows="10"></textarea>
          </div>
          @error('newnotes')
              <span class="text-sm text-red-700">{{$message}}</span>
          @enderror
        </div>
        <div wire:loading.remove>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
              Update
            </button>
        </div>

    </form>
  </div>
    
</div>
