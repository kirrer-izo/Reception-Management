<div class="">
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
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
              Name
            </label>
            <input wire:model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Customer Name...">
            @error('name')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone_number">
              Phone Number
            </label>
            <input wire:model="phone_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text">
            @error('phone_number')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
              Email
            </label>
            <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="email" placeholder="">
            @error('email')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="company">
              Institution From
            </label>
            <input wire:model="company" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" placeholder="Customer Name...">
            @error('company')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="host_name">
              Host Name
            </label>
            <select wire:model="host_name" name="host_name" id="" class="appearance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3  px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <option value="">Select Host...</option>
              @foreach ($employees as $employee )
              <option value="{{$employee->name}}">{{$employee->name}}</option>                
              @endforeach
            </select>
            
            @error('host_name')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
        </div>
  
        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
              Check In Time
            </label>
            <input wire:model="check_in_time" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="time" placeholder="">
            @error('check_in_time')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input wire:model="check_out_time" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="hidden">
            @error('check_out_time')
            <span class="text-sm text-red-700">{{$message}}</span>
            @enderror
        </div>
          
  
        </div>
          <div wire:loading.remove>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create
              </button>
          </div>
  
      </form>
  </div>
</div>
