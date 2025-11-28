```
<div>
<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Header -->
            <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex flex-col md:flex-row justify-between items-center gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Employee Directory</h2>
                    <p class="text-sm text-gray-500">Manage your team members.</p>
                </div>
                <a href="{{ route('createemployee') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors font-medium shadow-sm hover:shadow-md">
                    <ion-icon name="briefcase-outline" class="text-xl"></ion-icon> Add Employee
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                            <th class="p-4">Name</th>
                            <th class="p-4">Email</th>
                            <th class="p-4">Phone Number</th>
                            <th class="p-4">Department</th>
                            <th class="p-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($employees as $employee)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="p-4 font-medium text-gray-900">{{ $employee->name }}</td>
                            <td class="p-4 text-gray-600">{{ $employee->email }}</td>
                            <td class="p-4 text-gray-600">{{ $employee->phone_number }}</td>
                            <td class="p-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    {{ $employee->department }}
                                </span>
                            </td>
                            <td class="p-4 text-right">
                                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('editemployee', $employee->id) }}" class="p-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" title="Edit">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </a>
                                    <button wire:click="delete({{ $employee->id }})" 
                                            wire:confirm="Are you sure you want to delete this employee?"
                                            class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-12 text-center text-gray-400">
                                <ion-icon name="briefcase-outline" class="text-4xl mb-2 opacity-50"></ion-icon>
                                <p>No employees found.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-100 bg-gray-50/50">
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</div>
</div>
```
