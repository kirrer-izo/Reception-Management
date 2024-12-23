<div>
    {{-- <div class="flex justify-between"> --}}
      <div class="mb-2">
        <input wire:model.live.debounce.300ms="search" class="rounded-md px-2 mt-3" type="text" name="" id="" placeholder="search ...">
      </div>
      {{-- <div>
        <button wire:navigate href="{{route('createemployee')}}" type="submit"
                class="relative mt-3 px-20 py-2 text-sm text-white font-semibold
                       bg-green-400 overflow-hidden transition-all duration-300 ease-in-out
                       hover:bg-green-600 rounded-full z-10
                       before:absolute before:inset-0 before:bg-green-600 before:origin-left
                       before:scale-x-0 before:transition-transform before:duration-300
                       before:ease-in-out hover:before:scale-x-100 before:z-0"
            >
                <span class="relative z-10">Create</span>
            </button>
      </div> --}}
    {{-- </div> --}}
    <div class="flex justify-center">
          <table class="table-auto">
                <thead>
                  <tr>
                    <th class="px-3 py-3 mt-3">Name</th>
                    <th class="px-3 py-3 mt-3">User Type</th>
                    <th class="px-3 py-3 mt-3">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                    <tr>
                        <td class="border px-3 py-3 mt-3">{{$user->name}}</td>
                        <td class="border px-3 py-3 mt-3">{{$user->usertype}}</td>
                        <td class="border px-3 py-3 mt-3">{{$user->email}}</td>
                        {{-- <td class="border px-3 py-3 mt-3">
                            <div class="flex justify-evenly space-x-2">
                                <button wire:navigate href="{{route('editemployee',['employee' => $employee->id])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full text-sm">Edit</button>
                                <button wire:click="delete({{$employee->id}})" wire:confirm="Are you sure you want to delete {{$employee->name}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-full text-sm">Delete</button>
                            </div>
                        </td> --}}
                      </tr>    
                    @endforeach
                </tbody>
              </table>
      </div>
              <div class="mt-3">
                {{$users->links()}}
              </div>
  </div>
  