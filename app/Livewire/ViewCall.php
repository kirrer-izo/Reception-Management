<?php

namespace App\Livewire;

use App\Models\CallLog;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ViewCall extends Component
{
    public $callID;
    public $call;

    public function mount(CallLog $call)
    {
        $this->callID = $call->id;
        $this->call = CallLog::find($call->id);
    }

    public function delete()
    {
        $call = CallLog::find($this->callID);
        if($call){
            $call->delete();
        }

        session()->flash('success','Deleted Succesfully');

        $this->redirectRoute('calllog');
    }

    public function render()
    {
        $call = CallLog::find($this->callID);
        return view('livewire.view-call');
    }
}
