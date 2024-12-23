<div class="flex justify-center flex-col mb-10">
  <div class="flex justify-between">
  <div>
    <input wire:model.live.debounce.300ms="search" class="rounded-md px-2 mt-3" type="text" name="" id="" placeholder="search ...">
  </div>
  <div>
    @if (session('success'))
    <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md mt-3 mb-3" role="alert">
      <p class="text-sm">{{session('success')}}</p>
    </div>
    @endif

  </div>
  <div>
    <button wire:navigate href="{{route('createcall')}}" type="submit"
            class="relative mt-3 px-20 py-2 text-sm text-white font-semibold
                   bg-green-400 overflow-hidden transition-all duration-300 ease-in-out
                   hover:bg-green-600 rounded-full z-10
                   before:absolute before:inset-0 before:bg-green-600 before:origin-left
                   before:scale-x-0 before:transition-transform before:duration-300
                   before:ease-in-out hover:before:scale-x-100 before:z-0"
        >
            <span class="relative z-10">Create</span>
        </button>
  </div>
  </div>
  <div class="flex justify-center">
   
    <table class="table-auto">
          <thead>
            <tr>
              <th class="px-3 py-3 mt-3">Date</th>
              <th class="px-3 py-3 mt-3">Time</th>
              <th class="px-3 py-3 mt-3">Name</th>
              <th class="px-3 py-3 mt-3">Phone Number</th>
              <th class="px-3 py-3 mt-3">Call Type</th>
              <th class="px-3 py-3 mt-3">Call Status</th>
              <th class="px-3 py-3 mt-3">Employee</th>
              <th class="px-3 py-3 mt-3">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($calls as $call )
              <tr>
                  <td class="border px-3 py-3 mt-3">{{$call->date}}</td>
                  <td class="border px-3 py-3 mt-3">{{$call->time}}</td>
                  <td class="border px-3 py-3 mt-3">{{$call->name}}</td>
                  <td class="border px-3 py-3 mt-3">{{$call->phone_number}}</td>
                  <td class="border px-3 py-3 mt-3">{{$call->call_type}}</td>
                  <td class="border px-3 py-3 mt-3">{{$call->call_status}}</td>
                  <td class="border px-3 py-3 mt-3">{{$call->employee}}</td>
                  <td class="border px-3 py-3 mt-3">
                      <div class="flex justify-evenly space-x-2">
                          <button wire:navigate href="{{route('viewcall',['call' => $call->id])}}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 rounded-full text-sm">View</button>
                          <button wire:navigate href="{{route('editcall',['call' => $call->id])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full text-sm">Edit</button>
                          <button wire:click="delete({{$call->id}})" wire:confirm="Are you sure you want to delete this?" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-full text-sm">Delete</button>
                      </div>
                  </td>
                </tr>    
              @endforeach
          </tbody>
        </table>
  </div>
      <div class="mt-3">
        {{$calls->links()}}
      </div>

</div>
