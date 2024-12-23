<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class EditEmployee extends Component
{
    public $employeeID,$newname,$newphone_number,$newemail;

    protected $rules = [
        'newname' => 'required|min:2|max:50',
        'newphone_number' => 'required|max:10',
        'newemail' => 'required|email'
    ];
    public function mount(Employee $employee)
    {
        $this->authorize('update',Employee::class);
        $this->employeeID = $employee->id;
        $this->newname = $employee->name;
        $this->newphone_number = $employee->phone_number;
        $this->newemail = $employee->email;
    }

    public function edit()
    {
        $employee = Employee::findOrFail($this->employeeID);
        $employee->name = $this->newname;
        $employee->phone_number = $this->newphone_number;
        $employee->email = $this->newemail;

        $employee->save();
        return redirect()->route('employees');

    }
    public function render()
    {
        return view('livewire.edit-employee');
    }
}
