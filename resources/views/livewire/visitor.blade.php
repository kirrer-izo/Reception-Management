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
      <button wire:navigate href="{{route('createvisitor')}}" type="submit"
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
  <div>
  <table class="table-auto">
    <thead>
      <tr>
        <th class="px-3 py-3 mt-3">Date</th>
        <th class="px-3 py-3 mt-3">Name</th>
        <th class="px-3 py-3 mt-3">Phone Number</th>
        <th class="px-3 py-3 mt-3">Email</th>
        <th class="px-3 py-3 mt-3">Company</th>
        <th class="px-3 py-3 mt-3">Host Name</th>
        <th class="mt-3">Check Out</th>
        <th class="px-3 py-3 mt-3">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($visitors as $visitor )
        <tr>
            <td class="border px-3 py-3 mt-3">{{$visitor->date}}</td>
            <td class="border px-3 py-3 mt-3">{{$visitor->name}}</td>
            <td class="border px-3 py-3 mt-3">{{$visitor->phone_number}}</td>
            <td class="border px-3 py-3 mt-3">{{$visitor->email}}</td>
            <td class="border px-3 py-3 mt-3">{{$visitor->company}}</td>
            <td class="border px-3 py-3 mt-3">{{$visitor->host_name}}</td>
            <td class="border px-3 py-3 mt-3">
              @if ($visitor->check_out_time==null)
              <input wire:click.prevent="toggle({{$visitor->id}})" type="checkbox" name="" id="" value="">
              @else
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.58L18 9L10 17Z" fill="#4CAF50"/>
              </svg>
              <input wire:click.prevent="sendsms" wire:loading.remove type="checkbox" name="" id="" value=""> Sms Host
              @endif
              
            </td>
            <td class="border px-3 py-3 mt-3">
                <div class="flex justify-evenly space-x-2">
                    <button wire:navigate href="{{route('viewvisitor',['visitor' => $visitor->id])}}"  class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 rounded-full text-sm">View</button>
                    <button wire:navigate href="{{route('editvisitor',['visitor' => $visitor->id])}}"   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full text-sm">Edit</button>
                    <button wire:click="delete({{$visitor->id}})" wire:confirm="Are you sure you want to delete this?" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-full text-sm">Delete</button>
                </div>
            </td>
          </tr>    
        @endforeach
    </tbody>
  </table>
  </div>
  <div class="mt-3">
    {{$visitors->links()}}
  </div>
    
</div>
