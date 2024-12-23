<?php

namespace App\Livewire;

use App\Models\CallLog;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class CreateCall extends Component
{
    use WithPagination;

    public $date,$time,$name,$phone_number,$call_duration,$call_type,$call_status,$employee,$notes;

    protected $rules = [
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
        'name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:15',
        'call_duration' => 'nullable|string|max:10',
        'call_type' => 'required|in:inbound,outbound',
        'call_status' => 'required|in:completed,missed,voicemail',
        'employee' => 'required|string|max:255',
        'notes' => 'nullable|string|max:1000'
    ];

    public function save()
    {
        $this->validate();

        CallLog::create([
            'date' => $this->date,
            'time' => $this->time,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'call_duration' => $this->call_duration,
            'call_type' => $this->call_type,
            'call_status' => $this->call_status,
            'employee' => $this->employee,
            'notes' => $this->notes
        ]);

        $this->reset('date','name','phone_number','call_duration','call_type','call_status','employee','notes');
        session()->flash('success','Call created successfully');
        
    }
    public function render()
    {
        return view('livewire.create-call');
    }
}
