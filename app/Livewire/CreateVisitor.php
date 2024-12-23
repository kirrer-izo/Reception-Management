<?php

namespace App\Livewire;

use App\Models\Visitor;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Employee;



#[Layout('layouts.app')]
class CreateVisitor extends Component
{
    public $date,$name,$phone_number,$email,$company,$host_name,$check_in_time,$check_out_time;

    protected $rules = [
    'date' => 'required|date',
    'name' => 'required|max:255',
    'phone_number' => 'required|max:15',
    'email' => 'required|email|max:255',
    'company' => 'nullable|max:255',
    'host_name' => 'required|max:255',
    'check_in_time' => 'required|date_format:H:i',
    'check_out_time' => 'nullable|date_format:H:i|after:check_in_time',
    ];

    public function save()
    {
        $this->validate();

        Visitor::create([
            'date' => $this->date,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'company' => $this->company,
            'host_name' => $this->host_name,
            'check_in_time' => $this->check_in_time,
            'check_out_time' => $this->check_out_time
        ]);

        $this->reset('name','phone_number','email','company','host_name','check_in_time','check_out_time');
        session()->flash('success', 'Visitor created successfully');
    }


    public function render()
    {
        $empoyees = Employee::latest()->get();
        return view('livewire.create-visitor',
    [
        'employees' => $empoyees
    ]);
    }
}
