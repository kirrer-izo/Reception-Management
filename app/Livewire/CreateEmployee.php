<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateEmployee extends Component
{
    public $name,$phone_number,$email;

    protected $rules = [
        'name' => 'required|min:2|max:50',
        'phone_number' => 'required|max:10',
        'email' => 'required|email'
    ];

    public function save()
    {
        $this->validate();
        Employee::create([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email
        ]);

        session()->flash('success','Employee created successfully');
        $this->reset('name','phone_number','email');
    }
    public function render()
    {
        return view('livewire.create-employee');
    }
}
