<div class="flex justify-center space-x-3 mt-3">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <div class="flex justify-between mb-3">
        <div>
          <button wire:navigate href={{route('calllog')}} class="bg-white text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-2 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
             <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
            </svg>
          </button>
        </div>
        <div>
          <button wire:click="delete({{$call->id}})" wire:confirm="Are you sure you want to delete this?" class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          
            Delete
            </button>
        </div>
        <div>
          <button wire:navigate href={{route('editcall',['call' => $call->id])}} class="bg-white text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-2 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
          </button>
          
        </div>
      </div>
        <div class="flex justify-evenly">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Date: {{$call->date}}</div>
              <p class="text-gray-700 text-base">
               Time: {{$call->time}}
              </p>
            </div>
        </div>
  <div class="flex justify-center space-x-3">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Name</div>
        <p class="text-gray-700 text-base">
         {{$call->name}}
        </p>
      </div>
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Phone Number</div>
        <p class="text-gray-700 text-base">
         {{$call->phone_number}}
        </p>
      </div>
  </div>
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Employee</div>
    <p class="text-gray-700 text-base">
     {{$call->employee}}
    </p>
  </div>
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Notes</div>
    <p class="text-gray-700 text-base">
     {{$call->notes}}
    </p>
  </div>

  

  <div class="flex justify-evenly px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$call->call_duration}}</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$call->call_type}}</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$call->call_status}}</span>
  </div>
</div>
</div>
