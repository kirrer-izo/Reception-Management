<?php

namespace App\Livewire;

use App\Models\Employee as ModelsEmployee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class Employee extends Component
{
    use WithPagination;

    #[Url]
    public $search;

    public function delete(ModelsEmployee $employee)
    {
        $employee = ModelsEmployee::findOrFail($employee->id);
        if($employee){
            $employee->delete();
        }
    }

    public function render()
    {
        $employees = ModelsEmployee::latest()
        ->where('name','like',"%$this->search%")
        ->orWhere('phone_number','like',"%$this->search%")
        ->paginate(5);
        return view('livewire.employee',compact('employees'));
    }
}
