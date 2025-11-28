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
    <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">User Management</h2>
                    <p class="text-sm text-gray-500">Manage system users and their roles.</p>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                            <th class="p-4">Name</th>
                            <th class="p-4">Email</th>
                            <th class="p-4">Role</th>
                            <th class="p-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($users as $user)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="p-4 font-medium text-gray-900">{{ $user->name }}</td>
                            <td class="p-4 text-gray-600">{{ $user->email }}</td>
                            <td class="p-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    {{ $user->role == 'admin' ? 'bg-purple-100 text-purple-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>
                            <td class="p-4 text-right">
                                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button wire:click="delete({{ $user->id }})" 
                                            wire:confirm="Are you sure you want to delete this user?"
                                            class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-12 text-center text-gray-400">
                                <ion-icon name="person-outline" class="text-4xl mb-2 opacity-50"></ion-icon>
                                <p>No users found.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-100 bg-gray-50/50">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
  </div>
  
```