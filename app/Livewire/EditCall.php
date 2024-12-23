<?php

namespace App\Livewire;

use App\Models\CallLog;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class EditCall extends Component
{
    use WithPagination;

    public $callID,$newdate,$newtime,$newname,$newphone_number,$newcall_duration,$newcall_type,$newcall_status,$newemployee,$newnotes;

    protected $rules = [
        'newdate' => 'required|date',
        'newtime' => 'required|date_format:H:i',
        'newname' => 'required|string|max:255',
        'newphone_number' => 'required|string|max:15',
        'newcall_duration' => 'nullable|string|max:10',
        'newcall_type' => 'required|in:inbound,outbound',
        'newcall_status' => 'required|in:completed,missed,voicemail',
        'newemployee' => 'required|string|max:255',
        'newnotes' => 'nullable|string|max:1000'
    ];
     public function mount(CallLog $call)
     {
        $this->callID = $call->id;
        $this->newdate = $call->date;
        $this->newtime = $call->time;
        $this->newname = $call->name;
        $this->newphone_number = $call->phone_number;
        $this->newcall_duration = $call->call_duration;
        $this->newcall_type = $call->call_type;
        $this->newcall_status = $call->call_status;
        $this->newemployee = $call->employee;
        $this->newnotes = $call->notes;

     }

     public function edit()
     {
        $this->validate();
        $call = CallLog::find($this->callID);

        $call->date = $this->newdate;
        $call->time = $this->newtime;
        $call->name = $this->newname;
        $call->phone_number = $this->newphone_number;
        $call->call_duration = $this->newcall_duration;
        $call->call_type = $this->newcall_type;
        $call->call_status = $this->newcall_status;
        $call->employee = $this->newemployee;
        $call->notes = $this->newnotes;

        $call->save();

        session()->flash('success','Updated Successfully');
        return redirect()->route('calllog');
    }
    public function render()
    {
        return view('livewire.edit-call');
    }
}
